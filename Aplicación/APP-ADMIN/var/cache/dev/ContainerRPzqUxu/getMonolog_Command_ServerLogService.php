<?php

<<<<<<< HEAD
<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container24eWKRp/getMonolog_Command_ServerLogService.php
namespace Container24eWKRp;
=======
=======
<<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container1VyNrWM/getMonolog_Command_ServerLogService.php
namespace Container1VyNrWM;
========
>>>>>>> 477da2d03e5a4f1bb6508b77c2aa473ff27ca652
namespace ContainerRPzqUxu;
>>>>>>> c3c3798b07e811dc68b12039783577c1443ac405:Aplicación/APP-ADMIN/var/cache/dev/ContainerRPzqUxu/getMonolog_Command_ServerLogService.php

>>>>>>>> main:Aplicación/APP-ADMIN/var/cache/dev/ContainerRPzqUxu/getMonolog_Command_ServerLogService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_Command_ServerLogService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'monolog.command.server_log' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Command\ServerLogCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bridge'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ServerLogCommand.php';

        $container->privates['monolog.command.server_log'] = $instance = new \Symfony\Bridge\Monolog\Command\ServerLogCommand();

        $instance->setName('server:log');
        $instance->setDescription('Start a log server that displays logs in real time');

        return $instance;
    }
}
