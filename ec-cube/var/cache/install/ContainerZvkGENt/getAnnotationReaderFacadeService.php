<?php

namespace ContainerZvkGENt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnotationReaderFacadeService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the public 'Eccube\DependencyInjection\Facade\AnnotationReaderFacade' shared autowired service.
     *
     * @return \Eccube\DependencyInjection\Facade\AnnotationReaderFacade
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/DependencyInjection/Facade/AnnotationReaderFacade.php';

        return $container->services['Eccube\\DependencyInjection\\Facade\\AnnotationReaderFacade'] = new \Eccube\DependencyInjection\Facade\AnnotationReaderFacade(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()));
    }
}
