<?php

namespace ContainerZvkGENt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7KWvxmdService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private '.service_locator.7KWvxmd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7KWvxmd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Customer' => ['privates', '.errored..service_locator.7KWvxmd.Eccube\\Entity\\Customer', NULL, 'Cannot autowire service ".service_locator.7KWvxmd": it references class "Eccube\\Entity\\Customer" but no such service exists.'],
        ], [
            'Customer' => 'Eccube\\Entity\\Customer',
        ]);
    }
}
