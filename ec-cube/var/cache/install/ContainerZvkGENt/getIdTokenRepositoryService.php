<?php

namespace ContainerZvkGENt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIdTokenRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Plugin\SiteKit42\Repository\IdTokenRepository' shared autowired service.
     *
     * @return \Plugin\SiteKit42\Repository\IdTokenRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/app/Plugin/SiteKit42/Repository/IdTokenRepository.php';

        return $container->privates['Plugin\\SiteKit42\\Repository\\IdTokenRepository'] = new \Plugin\SiteKit42\Repository\IdTokenRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
