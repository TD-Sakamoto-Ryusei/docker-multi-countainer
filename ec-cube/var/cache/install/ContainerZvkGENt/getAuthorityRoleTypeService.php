<?php

namespace ContainerZvkGENt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthorityRoleTypeService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Form\Type\Admin\AuthorityRoleType' shared autowired service.
     *
     * @return \Eccube\Form\Type\Admin\AuthorityRoleType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Form/Type/Admin/AuthorityRoleType.php';

        return $container->privates['Eccube\\Form\\Type\\Admin\\AuthorityRoleType'] = new \Eccube\Form\Type\Admin\AuthorityRoleType();
    }
}
