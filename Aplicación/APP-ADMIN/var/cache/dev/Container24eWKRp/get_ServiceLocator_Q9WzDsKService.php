<?php

<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container24eWKRp/get_ServiceLocator_Q9WzDsKService.php
namespace Container24eWKRp;
=======
namespace ContainerRPzqUxu;
>>>>>>> c3c3798b07e811dc68b12039783577c1443ac405:Aplicación/APP-ADMIN/var/cache/dev/ContainerRPzqUxu/get_ServiceLocator_DQnconHService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DQnconHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DQnconH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DQnconH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contenido' => ['privates', '.errored..service_locator.DQnconH.App\\Entity\\Contenido', NULL, 'Cannot autowire service ".service_locator.DQnconH": it references class "App\\Entity\\Contenido" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'contenido' => 'App\\Entity\\Contenido',
            'entityManager' => '?',
            'slugger' => '?',
        ]);
    }
}
