<?php

namespace Container2mka5Nx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderStatusColorRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\Master\OrderStatusColorRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\OrderStatusColorRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/Master/OrderStatusColorRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\OrderStatusColorRepository'] = new \Eccube\Repository\Master\OrderStatusColorRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
