<?php

namespace ContainerZvkGENt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEccube_Purchase_Flow_ShoppingService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'eccube.purchase.flow.shopping' shared service.
     *
     * @return \Eccube\Service\PurchaseFlow\PurchaseFlow
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/PurchaseFlow.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Collection.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/ArrayCollection.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ValidatorTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ItemHolderValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/StockMultipleValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/SaleLimitMultipleValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ItemHolderPreprocessor.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/DeliveryFeePreprocessor.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/DeliveryFeeFreeByShippingPreprocessor.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/PaymentChargePreprocessor.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ItemHolderPostValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/PointRateProcessor.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/PaymentChargeChangeValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/DeliveryFeeChangeValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/TaxRateChangeValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/PurchaseProcessor.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/PreOrderIdValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/AbstractPurchaseProcessor.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/CustomerPurchaseInfoProcessor.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/OrderUpdateProcessor.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ItemValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/ProductStatusValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/PriceChangeValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/ClassCategoryValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/PaymentTotalNegativeValidator.php';

        $container->privates['eccube.purchase.flow.shopping'] = $instance = new \Eccube\Service\PurchaseFlow\PurchaseFlow();

        $a = ($container->privates['Eccube\\Repository\\ProductClassRepository'] ?? $container->getProductClassRepositoryService());
        $b = ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\TaxProcessor'] ?? $container->load('getTaxProcessorService'));
        $c = ($container->privates['Eccube\\Repository\\BaseInfoRepository'] ?? $container->getBaseInfoRepositoryService());
        $d = ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PointProcessor'] ?? $container->load('getPointProcessorService'));

        $instance->setFlowType('shopping');
        $instance->setItemValidators(new \Doctrine\Common\Collections\ArrayCollection([0 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\DeliverySettingValidator'] ?? $container->load('getDeliverySettingValidatorService')), 1 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\ProductStatusValidator'] ?? ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\ProductStatusValidator'] = new \Eccube\Service\PurchaseFlow\Processor\ProductStatusValidator())), 2 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PriceChangeValidator'] ?? ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PriceChangeValidator'] = new \Eccube\Service\PurchaseFlow\Processor\PriceChangeValidator())), 3 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\ClassCategoryValidator'] ?? ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\ClassCategoryValidator'] = new \Eccube\Service\PurchaseFlow\Processor\ClassCategoryValidator()))]));
        $instance->setItemHolderValidators(new \Doctrine\Common\Collections\ArrayCollection([0 => new \Eccube\Service\PurchaseFlow\Processor\StockMultipleValidator($a), 1 => new \Eccube\Service\PurchaseFlow\Processor\SaleLimitMultipleValidator($a), 2 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\EmptyItemsValidator'] ?? $container->load('getEmptyItemsValidatorService'))]));
        $instance->setItemHolderPreprocessors(new \Doctrine\Common\Collections\ArrayCollection([0 => $b, 1 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\OrderNoProcessor'] ?? $container->load('getOrderNoProcessorService')), 2 => new \Eccube\Service\PurchaseFlow\Processor\DeliveryFeePreprocessor($c, ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['Eccube\\Repository\\TaxRuleRepository'] ?? $container->getTaxRuleRepositoryService()), ($container->privates['Eccube\\Repository\\DeliveryFeeRepository'] ?? $container->load('getDeliveryFeeRepositoryService'))), 3 => new \Eccube\Service\PurchaseFlow\Processor\DeliveryFeeFreeByShippingPreprocessor($c), 4 => new \Eccube\Service\PurchaseFlow\Processor\PaymentChargePreprocessor(($container->privates['Eccube\\Repository\\Master\\OrderItemTypeRepository'] ?? $container->load('getOrderItemTypeRepositoryService')), ($container->privates['Eccube\\Repository\\Master\\TaxDisplayTypeRepository'] ?? $container->load('getTaxDisplayTypeRepositoryService')), ($container->privates['Eccube\\Repository\\Master\\TaxTypeRepository'] ?? $container->load('getTaxTypeRepositoryService'))), 5 => $b]));
        $instance->setDiscountProcessors(new \Doctrine\Common\Collections\ArrayCollection([0 => $d]));
        $instance->setItemHolderPostValidators(new \Doctrine\Common\Collections\ArrayCollection([0 => new \Eccube\Service\PurchaseFlow\Processor\PointRateProcessor($c), 1 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\AddPointProcessor'] ?? $container->load('getAddPointProcessorService')), 2 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PaymentValidator'] ?? $container->load('getPaymentValidatorService')), 3 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PaymentTotalLimitValidator'] ?? $container->load('getPaymentTotalLimitValidatorService')), 4 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PaymentTotalNegativeValidator'] ?? ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PaymentTotalNegativeValidator'] = new \Eccube\Service\PurchaseFlow\Processor\PaymentTotalNegativeValidator())), 5 => new \Eccube\Service\PurchaseFlow\Processor\PaymentChargeChangeValidator(), 6 => new \Eccube\Service\PurchaseFlow\Processor\DeliveryFeeChangeValidator(), 7 => new \Eccube\Service\PurchaseFlow\Processor\TaxRateChangeValidator()]));
        $instance->setPurchaseProcessors(new \Doctrine\Common\Collections\ArrayCollection([0 => new \Eccube\Service\PurchaseFlow\Processor\PreOrderIdValidator(($container->privates['Eccube\\Service\\CartService'] ?? $container->getCartServiceService())), 1 => $d, 2 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\StockReduceProcessor'] ?? $container->load('getStockReduceProcessorService')), 3 => new \Eccube\Service\PurchaseFlow\Processor\CustomerPurchaseInfoProcessor(), 4 => new \Eccube\Service\PurchaseFlow\Processor\OrderUpdateProcessor(($container->privates['Eccube\\Repository\\Master\\OrderStatusRepository'] ?? $container->load('getOrderStatusRepositoryService')))]));

        return $instance;
    }
}
