<?php

namespace Container2mka5Nx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaymentValidatorService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Service\PurchaseFlow\Processor\PaymentValidator' shared autowired service.
     *
     * @return \Eccube\Service\PurchaseFlow\Processor\PaymentValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ValidatorTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ItemHolderValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/PaymentValidator.php';

        return $container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PaymentValidator'] = new \Eccube\Service\PurchaseFlow\Processor\PaymentValidator(($container->privates['Eccube\\Repository\\DeliveryRepository'] ?? $container->load('getDeliveryRepositoryService')));
    }
}
