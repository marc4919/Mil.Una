<?php

namespace ContainerIgOTDds;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ORYSK9UService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ORYSK9U' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ORYSK9U'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ContenidoController::delete' => ['privates', '.service_locator.BFO3KOY', 'get_ServiceLocator_BFO3KOYService', true],
            'App\\Controller\\ContenidoController::edit' => ['privates', '.service_locator.DQnconH', 'get_ServiceLocator_DQnconHService', true],
            'App\\Controller\\ContenidoController::index' => ['privates', '.service_locator.p84xtg9', 'get_ServiceLocator_P84xtg9Service', true],
            'App\\Controller\\ContenidoController::new' => ['privates', '.service_locator.Hjz3HR0', 'get_ServiceLocator_Hjz3HR0Service', true],
            'App\\Controller\\ContenidoController::show' => ['privates', '.service_locator.OlaUaSd', 'get_ServiceLocator_OlaUaSdService', true],
            'App\\Controller\\EmpleoController::delete' => ['privates', '.service_locator.J0i9nl8', 'get_ServiceLocator_J0i9nl8Service', true],
            'App\\Controller\\EmpleoController::edit' => ['privates', '.service_locator.J0i9nl8', 'get_ServiceLocator_J0i9nl8Service', true],
            'App\\Controller\\EmpleoController::index' => ['privates', '.service_locator.I.Fg2WZ', 'get_ServiceLocator_I_Fg2WZService', true],
            'App\\Controller\\EmpleoController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\EmpleoController::show' => ['privates', '.service_locator.2VPHbV7', 'get_ServiceLocator_2VPHbV7Service', true],
            'App\\Controller\\EventoController::delete' => ['privates', '.service_locator.SOWg_70', 'get_ServiceLocator_SOWg70Service', true],
            'App\\Controller\\EventoController::edit' => ['privates', '.service_locator.SOWg_70', 'get_ServiceLocator_SOWg70Service', true],
            'App\\Controller\\EventoController::index' => ['privates', '.service_locator.NA08g17', 'get_ServiceLocator_NA08g17Service', true],
            'App\\Controller\\EventoController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\EventoController::show' => ['privates', '.service_locator.tkLVMLM', 'get_ServiceLocator_TkLVMLMService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.3OYTKdS', 'get_ServiceLocator_3OYTKdSService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.GPGtF8v', 'get_ServiceLocator_GPGtF8vService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.GPGtF8v', 'get_ServiceLocator_GPGtF8vService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\ContenidoController:delete' => ['privates', '.service_locator.BFO3KOY', 'get_ServiceLocator_BFO3KOYService', true],
            'App\\Controller\\ContenidoController:edit' => ['privates', '.service_locator.DQnconH', 'get_ServiceLocator_DQnconHService', true],
            'App\\Controller\\ContenidoController:index' => ['privates', '.service_locator.p84xtg9', 'get_ServiceLocator_P84xtg9Service', true],
            'App\\Controller\\ContenidoController:new' => ['privates', '.service_locator.Hjz3HR0', 'get_ServiceLocator_Hjz3HR0Service', true],
            'App\\Controller\\ContenidoController:show' => ['privates', '.service_locator.OlaUaSd', 'get_ServiceLocator_OlaUaSdService', true],
            'App\\Controller\\EmpleoController:delete' => ['privates', '.service_locator.J0i9nl8', 'get_ServiceLocator_J0i9nl8Service', true],
            'App\\Controller\\EmpleoController:edit' => ['privates', '.service_locator.J0i9nl8', 'get_ServiceLocator_J0i9nl8Service', true],
            'App\\Controller\\EmpleoController:index' => ['privates', '.service_locator.I.Fg2WZ', 'get_ServiceLocator_I_Fg2WZService', true],
            'App\\Controller\\EmpleoController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\EmpleoController:show' => ['privates', '.service_locator.2VPHbV7', 'get_ServiceLocator_2VPHbV7Service', true],
            'App\\Controller\\EventoController:delete' => ['privates', '.service_locator.SOWg_70', 'get_ServiceLocator_SOWg70Service', true],
            'App\\Controller\\EventoController:edit' => ['privates', '.service_locator.SOWg_70', 'get_ServiceLocator_SOWg70Service', true],
            'App\\Controller\\EventoController:index' => ['privates', '.service_locator.NA08g17', 'get_ServiceLocator_NA08g17Service', true],
            'App\\Controller\\EventoController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\EventoController:show' => ['privates', '.service_locator.tkLVMLM', 'get_ServiceLocator_TkLVMLMService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.3OYTKdS', 'get_ServiceLocator_3OYTKdSService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.GPGtF8v', 'get_ServiceLocator_GPGtF8vService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.GPGtF8v', 'get_ServiceLocator_GPGtF8vService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\ContenidoController::delete' => '?',
            'App\\Controller\\ContenidoController::edit' => '?',
            'App\\Controller\\ContenidoController::index' => '?',
            'App\\Controller\\ContenidoController::new' => '?',
            'App\\Controller\\ContenidoController::show' => '?',
            'App\\Controller\\EmpleoController::delete' => '?',
            'App\\Controller\\EmpleoController::edit' => '?',
            'App\\Controller\\EmpleoController::index' => '?',
            'App\\Controller\\EmpleoController::new' => '?',
            'App\\Controller\\EmpleoController::show' => '?',
            'App\\Controller\\EventoController::delete' => '?',
            'App\\Controller\\EventoController::edit' => '?',
            'App\\Controller\\EventoController::index' => '?',
            'App\\Controller\\EventoController::new' => '?',
            'App\\Controller\\EventoController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ContenidoController:delete' => '?',
            'App\\Controller\\ContenidoController:edit' => '?',
            'App\\Controller\\ContenidoController:index' => '?',
            'App\\Controller\\ContenidoController:new' => '?',
            'App\\Controller\\ContenidoController:show' => '?',
            'App\\Controller\\EmpleoController:delete' => '?',
            'App\\Controller\\EmpleoController:edit' => '?',
            'App\\Controller\\EmpleoController:index' => '?',
            'App\\Controller\\EmpleoController:new' => '?',
            'App\\Controller\\EmpleoController:show' => '?',
            'App\\Controller\\EventoController:delete' => '?',
            'App\\Controller\\EventoController:edit' => '?',
            'App\\Controller\\EventoController:index' => '?',
            'App\\Controller\\EventoController:new' => '?',
            'App\\Controller\\EventoController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
