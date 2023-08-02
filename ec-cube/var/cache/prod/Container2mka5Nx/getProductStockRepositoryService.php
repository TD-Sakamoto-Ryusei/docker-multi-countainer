<?php

namespace Container2mka5Nx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductStockRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\ProductStockRepository' shared autowired service.
     *
     * @return \Eccube\Repository\ProductStockRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/ProductStockRepository.php';

        return $container->privates['Eccube\\Repository\\ProductStockRepository'] = new \Eccube\Repository\ProductStockRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
