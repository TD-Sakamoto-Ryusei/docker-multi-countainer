<?php

namespace ContainerZvkGENt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCountryRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Repository\Master\CountryRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\CountryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/Master/CountryRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\CountryRepository'] = new \Eccube\Repository\Master\CountryRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
