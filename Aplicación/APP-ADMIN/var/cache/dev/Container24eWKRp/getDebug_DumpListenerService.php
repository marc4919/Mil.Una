<?php

<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container24eWKRp/getDebug_DumpListenerService.php
namespace Container24eWKRp;
=======
namespace ContainerRPzqUxu;
>>>>>>> c3c3798b07e811dc68b12039783577c1443ac405:Aplicación/APP-ADMIN/var/cache/dev/ContainerRPzqUxu/getDebug_DumpListenerService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_DumpListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.dump_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'DumpListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'ContextualizedDumper.php';

        return $container->privates['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener(($container->services['var_dumper.cloner'] ?? $container->getVarDumper_ClonerService()), new \Symfony\Component\VarDumper\Dumper\ContextualizedDumper(($container->privates['var_dumper.contextualized_cli_dumper.inner'] ?? $container->load('getVarDumper_ContextualizedCliDumper_InnerService')), ['source' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider('UTF-8', \dirname(__DIR__, 4), ($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService()))]), ($container->privates['var_dumper.server_connection'] ?? $container->getVarDumper_ServerConnectionService()));
    }
}
