<?php

namespace ContainerZvkGENt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DnxKfSdService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private '.service_locator.DnxKfSd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DnxKfSd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'pluginService' => ['services', 'Eccube\\Service\\PluginService', 'getPluginServiceService', true],
            'systemService' => ['services', 'Eccube\\Service\\SystemService', 'getSystemServiceService', true],
        ], [
            'dispatcher' => '?',
            'pluginService' => 'Eccube\\Service\\PluginService',
            'systemService' => 'Eccube\\Service\\SystemService',
        ]);
    }
}
