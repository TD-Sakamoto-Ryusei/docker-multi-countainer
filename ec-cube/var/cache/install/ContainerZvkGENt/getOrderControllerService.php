<?php

namespace ContainerZvkGENt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderControllerService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the public 'Eccube\Controller\Admin\Order\OrderController' shared autowired service.
     *
     * @return \Eccube\Controller\Admin\Order\OrderController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/OrderController.php';

        $container->services['Eccube\\Controller\\Admin\\Order\\OrderController'] = $instance = new \Eccube\Controller\Admin\Order\OrderController(($container->privates['eccube.purchase.flow.order'] ?? $container->load('getEccube_Purchase_Flow_OrderService')), ($container->privates['Eccube\\Service\\CsvExportService'] ?? $container->load('getCsvExportServiceService')), ($container->privates['Eccube\\Repository\\CustomerRepository'] ?? $container->load('getCustomerRepositoryService')), ($container->privates['Eccube\\Repository\\PaymentRepository'] ?? $container->load('getPaymentRepositoryService')), ($container->privates['Eccube\\Repository\\Master\\SexRepository'] ?? $container->load('getSexRepositoryService')), ($container->privates['Eccube\\Repository\\Master\\OrderStatusRepository'] ?? $container->load('getOrderStatusRepositoryService')), ($container->privates['Eccube\\Repository\\Master\\PageMaxRepository'] ?? $container->load('getPageMaxRepositoryService')), ($container->privates['Eccube\\Repository\\Master\\ProductStatusRepository'] ?? $container->load('getProductStatusRepositoryService')), ($container->privates['Eccube\\Repository\\ProductStockRepository'] ?? $container->load('getProductStockRepositoryService')), ($container->privates['Eccube\\Repository\\OrderRepository'] ?? $container->getOrderRepositoryService()), ($container->privates['Eccube\\Repository\\OrderPdfRepository'] ?? $container->load('getOrderPdfRepositoryService')), ($container->services['.container.private.validator'] ?? $container->get_Container_Private_ValidatorService()), ($container->privates['Eccube\\Service\\OrderStateMachine'] ?? $container->load('getOrderStateMachineService')), ($container->privates['Eccube\\Service\\MailService'] ?? $container->load('getMailServiceService')));

        $instance->setEccubeConfig(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))));
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
        $instance->setTranslator(($container->services['translator'] ?? $container->getTranslatorService()));
        $instance->setSession(($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()));
        $instance->setFormFactory(($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        $instance->setContainer(($container->privates['.service_locator.yMsCa4n'] ?? $container->load('get_ServiceLocator_YMsCa4nService'))->withContext('Eccube\\Controller\\Admin\\Order\\OrderController', $container));

        return $instance;
    }
}
