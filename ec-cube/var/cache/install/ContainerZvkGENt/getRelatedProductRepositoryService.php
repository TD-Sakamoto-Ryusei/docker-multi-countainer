<?php

namespace ContainerZvkGENt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRelatedProductRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Plugin\RelatedProduct42\Repository\RelatedProductRepository' shared autowired service.
     *
     * @return \Plugin\RelatedProduct42\Repository\RelatedProductRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/app/Plugin/RelatedProduct42/Repository/RelatedProductRepository.php';

        return $container->privates['Plugin\\RelatedProduct42\\Repository\\RelatedProductRepository'] = new \Plugin\RelatedProduct42\Repository\RelatedProductRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
