<?php

<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container24eWKRp/get_ServiceLocator_MAoJ4pWService.php
namespace Container24eWKRp;
=======
namespace ContainerRPzqUxu;
>>>>>>> c3c3798b07e811dc68b12039783577c1443ac405:Aplicación/APP-ADMIN/var/cache/dev/ContainerRPzqUxu/get_ServiceLocator_I_Fg2WZService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I_Fg2WZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.I.Fg2WZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.I.Fg2WZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'empleoRepository' => ['privates', 'App\\Repository\\EmpleoRepository', 'getEmpleoRepositoryService', true],
        ], [
            'empleoRepository' => 'App\\Repository\\EmpleoRepository',
        ]);
    }
}
