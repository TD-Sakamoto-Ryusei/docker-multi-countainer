<?php

namespace ContainerZvkGENt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthorityRoleRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Repository\AuthorityRoleRepository' shared autowired service.
     *
     * @return \Eccube\Repository\AuthorityRoleRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/AuthorityRoleRepository.php';

        return $container->privates['Eccube\\Repository\\AuthorityRoleRepository'] = new \Eccube\Repository\AuthorityRoleRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
