<?php

<<<<<<< HEAD
<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container24eWKRp/getMaker_FileManagerService.php
namespace Container24eWKRp;
=======
=======
<<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container1VyNrWM/getMaker_FileManagerService.php
namespace Container1VyNrWM;
========
>>>>>>> 477da2d03e5a4f1bb6508b77c2aa473ff27ca652
namespace ContainerRPzqUxu;
>>>>>>> c3c3798b07e811dc68b12039783577c1443ac405:Aplicación/APP-ADMIN/var/cache/dev/ContainerRPzqUxu/getMaker_FileManagerService.php

>>>>>>>> main:Aplicación/APP-ADMIN/var/cache/dev/ContainerRPzqUxu/getMaker_FileManagerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_FileManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.file_manager' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\FileManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FileManager.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'AutoloaderUtil.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'ComposerAutoloaderFinder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'MakerFileLinkFormatter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'filesystem'.\DIRECTORY_SEPARATOR.'Filesystem.php';

        return $container->privates['maker.file_manager'] = new \Symfony\Bundle\MakerBundle\FileManager(($container->services['.container.private.filesystem'] ?? ($container->services['.container.private.filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), new \Symfony\Bundle\MakerBundle\Util\AutoloaderUtil(new \Symfony\Bundle\MakerBundle\Util\ComposerAutoloaderFinder('App')), new \Symfony\Bundle\MakerBundle\Util\MakerFileLinkFormatter(($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService())), \dirname(__DIR__, 4), (\dirname(__DIR__, 4).'/templates'));
    }
}
