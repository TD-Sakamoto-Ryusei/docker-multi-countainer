<?php

namespace ContainerZvkGENt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPluginEnableCommandService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Command\PluginEnableCommand' shared autowired service.
     *
     * @return \Eccube\Command\PluginEnableCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Command/PluginCommandTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Command/PluginEnableCommand.php';

        $container->privates['Eccube\\Command\\PluginEnableCommand'] = $instance = new \Eccube\Command\PluginEnableCommand();

        $instance->setPluginService(($container->services['Eccube\\Service\\PluginService'] ?? $container->load('getPluginServiceService')));
        $instance->setPluginRepository(($container->services['Eccube\\Repository\\PluginRepository'] ?? $container->getPluginRepositoryService()));
        $instance->setName('eccube:plugin:enable');

        return $instance;
    }
}
