<?php

namespace Container2mka5Nx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShippingMultipleTypeService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Form\Type\ShippingMultipleType' shared autowired service.
     *
     * @return \Eccube\Form\Type\ShippingMultipleType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Form/Type/ShippingMultipleType.php';

        return $container->privates['Eccube\\Form\\Type\\ShippingMultipleType'] = new \Eccube\Form\Type\ShippingMultipleType(($container->privates['Eccube\\Repository\\ShippingRepository'] ?? $container->load('getShippingRepositoryService')));
    }
}
