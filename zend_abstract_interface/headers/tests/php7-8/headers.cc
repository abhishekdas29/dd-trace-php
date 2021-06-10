extern "C" {
#include "zai_sapi/zai_sapi.h"
#include "headers/headers.h"

#include <Zend/zend_API.h>
}

#include <catch2/catch.hpp>
#include <cstring>

#define TEST(name, code) TEST_CASE(name, "[zai headers]") { \
        REQUIRE(zai_sapi_spinup()); \
        ZAI_SAPI_TSRMLS_FETCH(); \
        ZAI_SAPI_ABORT_ON_BAILOUT_OPEN() \
        { code } \
        ZAI_SAPI_ABORT_ON_BAILOUT_CLOSE() \
        zai_sapi_spindown(); \
        register_custom_server_variables = NULL; \
    }

static void define_server_value(zval *arr) {
    add_assoc_string(arr, "HTTP_MY_HEADER", "DataDog");
}

TEST("reading defined header value", {
    register_custom_server_variables = define_server_value;

    zend_string *header;
    REQUIRE(zai_read_header_literal("MY_HEADER", &header) == ZAI_HEADER_SUCCESS);
    REQUIRE(zend_string_equals_literal(header, "DataDog"));
})

TEST("reading undefined header value", {
    register_custom_server_variables = define_server_value;

    zend_string *header;
    REQUIRE(zai_read_header_literal("NOT_MY_HEADER", &header) == ZAI_HEADER_NOT_SET);
})

TEST("erroneous read_header input", {
    zend_string *header;
    REQUIRE(zai_read_header({ 1, nullptr }, &header) == ZAI_HEADER_ERROR);
    REQUIRE(zai_read_header({ 0, "" }, &header) == ZAI_HEADER_ERROR);
    REQUIRE(zai_read_header_literal("abc", nullptr) == ZAI_HEADER_ERROR);
})
