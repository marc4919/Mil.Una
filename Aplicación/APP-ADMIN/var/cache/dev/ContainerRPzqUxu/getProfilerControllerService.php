<?php

<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container2x9EUrJ/getProfilerControllerService.php
namespace Container2x9EUrJ;
=======
namespace ContainerRPzqUxu;
>>>>>>> c3c3798b07e811dc68b12039783577c1443ac405:Aplicación/APP-ADMIN/var/cache/dev/ContainerRPzqUxu/getProfilerControllerService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfilerControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Doctrine\Bundle\DoctrineBundle\Controller\ProfilerController' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Controller\ProfilerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ProfilerController.php';

        return $container->services['Doctrine\\Bundle\\DoctrineBundle\\Controller\\ProfilerController'] = new \Doctrine\Bundle\DoctrineBundle\Controller\ProfilerController(($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), ($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->services['.container.private.profiler'] ?? $container->get_Container_Private_ProfilerService()));
    }
}
