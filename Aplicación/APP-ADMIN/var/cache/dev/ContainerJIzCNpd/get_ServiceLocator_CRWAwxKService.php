<?php

<<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/ContainerJIzCNpd/get_ServiceLocator_CRWAwxKService.php
namespace ContainerJIzCNpd;
========
namespace ContainerIgOTDds;

>>>>>>>> main:Aplicación/APP-ADMIN/var/cache/dev/ContainerIgOTDds/get_ServiceLocator_NA08g17Service.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NA08g17Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NA08g17' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NA08g17'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contenidoRepository' => ['privates', 'App\\Repository\\ContenidoRepository', 'getContenidoRepositoryService', true],
            'empleoRepository' => ['privates', 'App\\Repository\\EmpleoRepository', 'getEmpleoRepositoryService', true],
            'eventoRepository' => ['privates', 'App\\Repository\\EventoRepository', 'getEventoRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'contenidoRepository' => 'App\\Repository\\ContenidoRepository',
            'empleoRepository' => 'App\\Repository\\EmpleoRepository',
            'eventoRepository' => 'App\\Repository\\EventoRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
