<?php

namespace ContainerZvkGENt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTemplateRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Repository\TemplateRepository' shared autowired service.
     *
     * @return \Eccube\Repository\TemplateRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/TemplateRepository.php';

        return $container->privates['Eccube\\Repository\\TemplateRepository'] = new \Eccube\Repository\TemplateRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
