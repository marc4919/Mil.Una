<?php

<<<<<<< HEAD
<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container24eWKRp/getConsole_Command_MessengerConsumeMessagesService.php
namespace Container24eWKRp;
=======
=======
<<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container1VyNrWM/getConsole_Command_MessengerConsumeMessagesService.php
namespace Container1VyNrWM;
========
>>>>>>> 477da2d03e5a4f1bb6508b77c2aa473ff27ca652
namespace ContainerRPzqUxu;
>>>>>>> c3c3798b07e811dc68b12039783577c1443ac405:Aplicación/APP-ADMIN/var/cache/dev/ContainerRPzqUxu/getConsole_Command_MessengerConsumeMessagesService.php

>>>>>>>> main:Aplicación/APP-ADMIN/var/cache/dev/ContainerRPzqUxu/getConsole_Command_MessengerConsumeMessagesService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerConsumeMessagesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.messenger_consume_messages' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\ConsumeMessagesCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ConsumeMessagesCommand.php';

        $container->privates['console.command.messenger_consume_messages'] = $instance = new \Symfony\Component\Messenger\Command\ConsumeMessagesCommand(($container->privates['messenger.routable_message_bus'] ?? $container->load('getMessenger_RoutableMessageBusService')), ($container->privates['messenger.receiver_locator'] ?? $container->load('getMessenger_ReceiverLocatorService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')), [0 => 'async', 1 => 'failed'], NULL, [0 => 'messenger.bus.default']);

        $instance->setName('messenger:consume');
        $instance->setDescription('Consume messages');

        return $instance;
    }
}
