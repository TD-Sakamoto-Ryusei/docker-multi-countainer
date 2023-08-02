<?php

namespace Container2mka5Nx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderNoProcessorService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Service\PurchaseFlow\Processor\OrderNoProcessor' shared autowired service.
     *
     * @return \Eccube\Service\PurchaseFlow\Processor\OrderNoProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ItemHolderPreprocessor.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/OrderNoProcessor.php';

        return $container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\OrderNoProcessor'] = new \Eccube\Service\PurchaseFlow\Processor\OrderNoProcessor(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))), ($container->privates['Eccube\\Repository\\OrderRepository'] ?? $container->getOrderRepositoryService()));
    }
}
