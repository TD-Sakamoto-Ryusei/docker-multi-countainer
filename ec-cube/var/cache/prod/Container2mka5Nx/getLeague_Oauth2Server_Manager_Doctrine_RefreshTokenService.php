<?php

namespace Container2mka5Nx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeague_Oauth2Server_Manager_Doctrine_RefreshTokenService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'league.oauth2_server.manager.doctrine.refresh_token' shared service.
     *
     * @return \League\Bundle\OAuth2ServerBundle\Manager\Doctrine\RefreshTokenManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Manager/RefreshTokenManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Manager/Doctrine/RefreshTokenManager.php';

        return $container->privates['league.oauth2_server.manager.doctrine.refresh_token'] = new \League\Bundle\OAuth2ServerBundle\Manager\Doctrine\RefreshTokenManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
