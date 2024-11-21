<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'services_resetter' shared service.

return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
    if (isset($this->services['cache.app'])) {
        yield 'cache.app' => ($this->services['cache.app'] ?? null);
    }
    if (isset($this->services['cache.system'])) {
        yield 'cache.system' => ($this->services['cache.system'] ?? null);
    }
    if (isset($this->privates['cache.validator'])) {
        yield 'cache.validator' => ($this->privates['cache.validator'] ?? null);
    }
    if (isset($this->privates['cache.serializer'])) {
        yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? null);
    }
    if (isset($this->privates['cache.annotations'])) {
        yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? null);
    }
    if (isset($this->privates['cache.property_info'])) {
        yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? null);
    }
    if (isset($this->privates['array'])) {
        yield 'array' => ($this->privates['array'] ?? null);
    }
    if (isset($this->privates['form.choice_list_factory.cached'])) {
        yield 'form.choice_list_factory.cached' => ($this->privates['form.choice_list_factory.cached'] ?? null);
    }
    if (isset($this->services['profiler'])) {
        yield 'profiler' => ($this->services['profiler'] ?? null);
    }
    if (isset($this->services['validator'])) {
        yield 'debug.validator' => ($this->services['validator'] ?? null);
    }
    if (isset($this->privates['debug.stopwatch'])) {
        yield 'debug.stopwatch' => ($this->privates['debug.stopwatch'] ?? null);
    }
    if (isset($this->services['event_dispatcher'])) {
        yield 'debug.event_dispatcher' => ($this->services['event_dispatcher'] ?? null);
    }
    if (isset($this->services['security.token_storage'])) {
        yield 'security.token_storage' => ($this->services['security.token_storage'] ?? null);
    }
    if (isset($this->privates['cache.security_expression_language'])) {
        yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? null);
    }
    if (isset($this->privates['twig.form.engine'])) {
        yield 'twig.form.engine' => ($this->privates['twig.form.engine'] ?? null);
    }
    if (isset($this->privates['monolog.handler.main'])) {
        yield 'monolog.handler.main' => ($this->privates['monolog.handler.main'] ?? null);
    }
    if (isset($this->privates['monolog.handler.console'])) {
        yield 'monolog.handler.console' => ($this->privates['monolog.handler.console'] ?? null);
    }
    if (isset($this->privates['monolog.handler.console_very_verbose'])) {
        yield 'monolog.handler.console_very_verbose' => ($this->privates['monolog.handler.console_very_verbose'] ?? null);
    }
    if (isset($this->privates['swiftmailer.email_sender.listener'])) {
        yield 'swiftmailer.email_sender.listener' => ($this->privates['swiftmailer.email_sender.listener'] ?? null);
    }
    if (isset($this->services['doctrine'])) {
        yield 'doctrine' => ($this->services['doctrine'] ?? null);
    }
    if (isset($this->privates['form.type.entity'])) {
        yield 'form.type.entity' => ($this->privates['form.type.entity'] ?? null);
    }
    if (isset($this->privates['api_platform.cache.route_name_resolver'])) {
        yield 'api_platform.cache.route_name_resolver' => ($this->privates['api_platform.cache.route_name_resolver'] ?? null);
    }
    if (isset($this->privates['api_platform.cache.metadata.resource'])) {
        yield 'api_platform.cache.metadata.resource' => ($this->privates['api_platform.cache.metadata.resource'] ?? null);
    }
    if (isset($this->privates['api_platform.cache.metadata.resource.legacy'])) {
        yield 'api_platform.cache.metadata.resource.legacy' => ($this->privates['api_platform.cache.metadata.resource.legacy'] ?? null);
    }
    if (isset($this->privates['api_platform.cache.metadata.property.legacy'])) {
        yield 'api_platform.cache.metadata.property.legacy' => ($this->privates['api_platform.cache.metadata.property.legacy'] ?? null);
    }
    if (isset($this->privates['api_platform.cache.subresource_operation_factory'])) {
        yield 'api_platform.cache.subresource_operation_factory' => ($this->privates['api_platform.cache.subresource_operation_factory'] ?? null);
    }
    if (isset($this->privates['api_platform.cache.metadata.property'])) {
        yield 'api_platform.cache.metadata.property' => ($this->privates['api_platform.cache.metadata.property'] ?? null);
    }
    if (isset($this->privates['api_platform.cache.metadata.resource_collection'])) {
        yield 'api_platform.cache.metadata.resource_collection' => ($this->privates['api_platform.cache.metadata.resource_collection'] ?? null);
    }
    if (isset($this->privates['api_platform.cache.identifiers_extractor'])) {
        yield 'api_platform.cache.identifiers_extractor' => ($this->privates['api_platform.cache.identifiers_extractor'] ?? null);
    }
    if (isset($this->privates['.debug.http_client'])) {
        yield '.debug.http_client' => ($this->privates['.debug.http_client'] ?? null);
    }
}, function () {
    return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (isset($this->privates['cache.validator'])) + (int) (isset($this->privates['cache.serializer'])) + (int) (isset($this->privates['cache.annotations'])) + (int) (isset($this->privates['cache.property_info'])) + (int) (isset($this->privates['array'])) + (int) (isset($this->privates['form.choice_list_factory.cached'])) + (int) (isset($this->services['profiler'])) + (int) (isset($this->services['validator'])) + (int) (isset($this->privates['debug.stopwatch'])) + (int) (isset($this->services['event_dispatcher'])) + (int) (isset($this->services['security.token_storage'])) + (int) (isset($this->privates['cache.security_expression_language'])) + (int) (isset($this->privates['twig.form.engine'])) + (int) (isset($this->privates['monolog.handler.main'])) + (int) (isset($this->privates['monolog.handler.console'])) + (int) (isset($this->privates['monolog.handler.console_very_verbose'])) + (int) (isset($this->privates['swiftmailer.email_sender.listener'])) + (int) (isset($this->services['doctrine'])) + (int) (isset($this->privates['form.type.entity'])) + (int) (isset($this->privates['api_platform.cache.route_name_resolver'])) + (int) (isset($this->privates['api_platform.cache.metadata.resource'])) + (int) (isset($this->privates['api_platform.cache.metadata.resource.legacy'])) + (int) (isset($this->privates['api_platform.cache.metadata.property.legacy'])) + (int) (isset($this->privates['api_platform.cache.subresource_operation_factory'])) + (int) (isset($this->privates['api_platform.cache.metadata.property'])) + (int) (isset($this->privates['api_platform.cache.metadata.resource_collection'])) + (int) (isset($this->privates['api_platform.cache.identifiers_extractor'])) + (int) (isset($this->privates['.debug.http_client']));
}), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'array' => [0 => 'reset'], 'form.choice_list_factory.cached' => [0 => 'reset'], 'profiler' => [0 => 'reset'], 'debug.validator' => [0 => 'reset'], 'debug.stopwatch' => [0 => 'reset'], 'debug.event_dispatcher' => [0 => 'reset'], 'security.token_storage' => [0 => 'disableUsageTracking', 1 => 'setToken'], 'cache.security_expression_language' => [0 => 'reset'], 'twig.form.engine' => [0 => 'reset'], 'monolog.handler.main' => [0 => 'reset'], 'monolog.handler.console' => [0 => 'reset'], 'monolog.handler.console_very_verbose' => [0 => 'reset'], 'swiftmailer.email_sender.listener' => [0 => 'reset'], 'doctrine' => [0 => 'reset'], 'form.type.entity' => [0 => 'reset'], 'api_platform.cache.route_name_resolver' => [0 => 'reset'], 'api_platform.cache.metadata.resource' => [0 => 'reset'], 'api_platform.cache.metadata.resource.legacy' => [0 => 'reset'], 'api_platform.cache.metadata.property.legacy' => [0 => 'reset'], 'api_platform.cache.subresource_operation_factory' => [0 => 'reset'], 'api_platform.cache.metadata.property' => [0 => 'reset'], 'api_platform.cache.metadata.resource_collection' => [0 => 'reset'], 'api_platform.cache.identifiers_extractor' => [0 => 'reset'], '.debug.http_client' => [0 => 'reset']]);
