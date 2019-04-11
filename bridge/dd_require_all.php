<?php

require_once __DIR__ . '/../src/DDTrace/Log/LoggingTrait.php';
require_once __DIR__ . '/../src/DDTrace/Configuration/Registry.php';
require_once __DIR__ . '/../src/DDTrace/Contracts/Tracer.php';
require_once __DIR__ . '/../src/DDTrace/Contracts/Span.php';
require_once __DIR__ . '/../src/DDTrace/Contracts/Scope.php';
require_once __DIR__ . '/../src/DDTrace/Contracts/ScopeManager.php';
require_once __DIR__ . '/../src/DDTrace/Contracts/SpanContext.php';
require_once __DIR__ . '/../src/DDTrace/Sampling/Sampler.php';
require_once __DIR__ . '/../src/DDTrace/Transport.php';
require_once __DIR__ . '/../src/DDTrace/SpanContext.php';
require_once __DIR__ . '/../src/DDTrace/Span.php';
require_once __DIR__ . '/../src/DDTrace/Tracer.php';
require_once __DIR__ . '/../src/DDTrace/Configuration/AbstractConfiguration.php';
require_once __DIR__ . '/../src/DDTrace/Configuration/EnvVariableRegistry.php';
require_once __DIR__ . '/../src/DDTrace/StartSpanOptionsFactory.php';
require_once __DIR__ . '/../src/DDTrace/Time.php';
require_once __DIR__ . '/../src/DDTrace/Transport/Http.php';
require_once __DIR__ . '/../src/DDTrace/Transport/Stream.php';
require_once __DIR__ . '/../src/DDTrace/Type.php';
require_once __DIR__ . '/../src/DDTrace/Encoder.php';
require_once __DIR__ . '/../src/DDTrace/Util/Runtime.php';
require_once __DIR__ . '/../src/DDTrace/Util/Versions.php';
require_once __DIR__ . '/../src/DDTrace/Util/ObjectKVStore.php';
require_once __DIR__ . '/../src/DDTrace/Util/ArrayKVStore.php';
require_once __DIR__ . '/../src/DDTrace/Util/TryCatchFinally.php';
require_once __DIR__ . '/../src/DDTrace/Util/CodeTracer.php';
require_once __DIR__ . '/../src/DDTrace/Processing/TraceAnalyticsProcessor.php';
require_once __DIR__ . '/../src/DDTrace/Tag.php';
require_once __DIR__ . '/../src/DDTrace/Scope.php';
require_once __DIR__ . '/../src/DDTrace/Reference.php';
require_once __DIR__ . '/../src/DDTrace/Sampling/AlwaysKeepSampler.php';
require_once __DIR__ . '/../src/DDTrace/Sampling/PrioritySampling.php';
require_once __DIR__ . '/../src/DDTrace/Sampling/ConfigurableSampler.php';
require_once __DIR__ . '/../src/DDTrace/Propagator.php';
require_once __DIR__ . '/../src/DDTrace/Configuration.php';
require_once __DIR__ . '/../src/DDTrace/Bootstrap.php';
require_once __DIR__ . '/../src/DDTrace/Encoders/SpanEncoder.php';
require_once __DIR__ . '/../src/DDTrace/Encoders/MessagePack.php';
require_once __DIR__ . '/../src/DDTrace/Exceptions/InvalidReferenceArgument.php';
require_once __DIR__ . '/../src/DDTrace/Exceptions/UnsupportedFormat.php';
require_once __DIR__ . '/../src/DDTrace/Exceptions/InvalidSpanArgument.php';
require_once __DIR__ . '/../src/DDTrace/Exceptions/InvalidReferencesSet.php';
require_once __DIR__ . '/../src/DDTrace/Exceptions/InvalidSpanOption.php';

require_once __DIR__ . '/../src/DDTrace/GlobalTracer.php';
require_once __DIR__ . '/../src/DDTrace/Propagators/TextMap.php';
require_once __DIR__ . '/../src/DDTrace/Propagators/CurlHeadersMap.php';
require_once __DIR__ . '/../src/DDTrace/ID.php';
require_once __DIR__ . '/../src/DDTrace/Http/Urls.php';
require_once __DIR__ . '/../src/DDTrace/Http/Request.php';
require_once __DIR__ . '/../src/DDTrace/ScopeManager.php';

// Integrations:
require_once __DIR__ . '/../src/DDTrace/Integrations/AbstractIntegrationConfiguration.php';
require_once __DIR__ . '/../src/DDTrace/Integrations/DefaultIntegrationConfiguration.php';
require_once __DIR__ . '/../src/DDTrace/Integrations/Integration.php';
require_once __DIR__ . '/../src/DDTrace/Integrations/ZendFramework/ZendFrameworkIntegration.php';
require_once __DIR__ . '/../src/DDTrace/Integrations/Web/WebIntegration.php';
require_once __DIR__ . '/../src/DDTrace/Integrations/Predis/PredisIntegration.php';
require_once __DIR__ . '/../src/DDTrace/Integrations/IntegrationsLoader.php';
require_once __DIR__ . '/../src/DDTrace/Integrations/PDO/PDOIntegration.php';
require_once __DIR__ . '/../src/DDTrace/Integrations/Eloquent/EloquentIntegration.php';
require_once __DIR__ . '/../src/DDTrace/Integrations/Memcached/MemcachedIntegration.php';
require_once __DIR__ . '/../src/DDTrace/Integrations/Curl/CurlIntegration.php';
require_once __DIR__ . '/../src/DDTrace/Integrations/Mysqli/MysqliIntegration.php';
require_once __DIR__ . '/../src/DDTrace/Integrations/Mongo/MongoClientIntegration.php';
require_once __DIR__ . '/../src/DDTrace/Integrations/Mongo/MongoDBIntegration.php';
require_once __DIR__ . '/../src/DDTrace/Integrations/Mongo/MongoCollectionIntegration.php';
require_once __DIR__ . '/../src/DDTrace/Integrations/Mongo/MongoIntegration.php';
require_once __DIR__ . '/../src/DDTrace/Integrations/Symfony/SymfonyIntegration.php';
require_once __DIR__ . '/../src/DDTrace/Integrations/ElasticSearch/V1/ElasticSearchIntegration.php';
require_once __DIR__ . '/../src/DDTrace/Integrations/Laravel/LaravelIntegration.php';
require_once __DIR__ . '/../src/DDTrace/Integrations/Laravel/V4/LaravelIntegration.php';
require_once __DIR__ . '/../src/DDTrace/Integrations/Guzzle/GuzzleIntegration.php';

// Loggers
require_once __DIR__ . '/../src/DDTrace/Log/Logger.php';
require_once __DIR__ . '/../src/DDTrace/Log/LoggerInterface.php';
require_once __DIR__ . '/../src/DDTrace/Log/InterpolateTrait.php';
require_once __DIR__ . '/../src/DDTrace/Log/LogLevel.php';
require_once __DIR__ . '/../src/DDTrace/Log/AbstractLogger.php';
require_once __DIR__ . '/../src/DDTrace/Log/ErrorLogLogger.php';

require_once __DIR__ . '/../src/DDTrace/Obfuscation.php';
require_once __DIR__ . '/../src/DDTrace/Format.php';
require_once __DIR__ . '/../src/DDTrace/StartSpanOptions.php';
