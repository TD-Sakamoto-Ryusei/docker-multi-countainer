<?php

namespace Container2mka5Nx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomerOrderStatusRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\Master\CustomerOrderStatusRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\CustomerOrderStatusRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/Master/CustomerOrderStatusRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\CustomerOrderStatusRepository'] = new \Eccube\Repository\Master\CustomerOrderStatusRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
