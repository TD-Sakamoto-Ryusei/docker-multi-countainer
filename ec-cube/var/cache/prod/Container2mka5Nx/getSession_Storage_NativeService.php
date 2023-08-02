<?php

namespace Container2mka5Nx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSession_Storage_NativeService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     *
     * @deprecated Since symfony/framework-bundle 5.3: The "session.storage.native" service is deprecated, use "session.storage.factory.native" instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/framework-bundle', '5.3', 'The "session.storage.native" service is deprecated, use "session.storage.factory.native" instead.');

        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/Handler/AbstractSessionHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/Handler/StrictSessionHandler.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Session/Storage/Handler/SameSiteNoneCompatSessionHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/Handler/NativeFileSessionHandler.php';

        return new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($container->getParameter('session.storage.options'), new \Eccube\Session\Storage\Handler\SameSiteNoneCompatSessionHandler(new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler((\dirname(__DIR__, 3).'/sessions/prod'))), $container->load('getSession_Storage_MetadataBagService'));
    }
}
