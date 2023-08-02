<?php

namespace ContainerZvkGENt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeague_Oauth2Server_Command_ClearExpiredTokensService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'league.oauth2_server.command.clear_expired_tokens' shared service.
     *
     * @return \League\Bundle\OAuth2ServerBundle\Command\ClearExpiredTokensCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Command/ClearExpiredTokensCommand.php';

        $container->privates['league.oauth2_server.command.clear_expired_tokens'] = $instance = new \League\Bundle\OAuth2ServerBundle\Command\ClearExpiredTokensCommand(($container->privates['league.oauth2_server.manager.doctrine.access_token'] ?? $container->load('getLeague_Oauth2Server_Manager_Doctrine_AccessTokenService')), ($container->privates['league.oauth2_server.manager.doctrine.refresh_token'] ?? $container->load('getLeague_Oauth2Server_Manager_Doctrine_RefreshTokenService')), ($container->privates['league.oauth2_server.manager.doctrine.authorization_code'] ?? $container->load('getLeague_Oauth2Server_Manager_Doctrine_AuthorizationCodeService')));

        $instance->setName('league:oauth2-server:clear-expired-tokens');

        return $instance;
    }
}
