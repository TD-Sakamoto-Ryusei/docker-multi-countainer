<?php

namespace ContainerZvkGENt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeague_Oauth2Server_Listener_AuthorizationRequestUserResolvingService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'league.oauth2_server.listener.authorization_request_user_resolving' shared service.
     *
     * @return \League\Bundle\OAuth2ServerBundle\EventListener\AuthorizationRequestUserResolvingListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/EventListener/AuthorizationRequestUserResolvingListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Security.php';

        return $container->privates['league.oauth2_server.listener.authorization_request_user_resolving'] = new \League\Bundle\OAuth2ServerBundle\EventListener\AuthorizationRequestUserResolvingListener(new \Symfony\Component\Security\Core\Security(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'security.authorization_checker' => ['services', '.container.private.security.authorization_checker', 'get_Container_Private_Security_AuthorizationCheckerService', false],
            'security.token_storage' => ['services', '.container.private.security.token_storage', 'get_Container_Private_Security_TokenStorageService', false],
        ], [
            'security.authorization_checker' => '?',
            'security.token_storage' => '?',
        ])));
    }
}
