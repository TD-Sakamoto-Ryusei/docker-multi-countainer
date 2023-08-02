<?php

namespace Container2mka5Nx;

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PluginService.php';
class PluginService_e75fd88 extends \Eccube\Service\PluginService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf6ecf = null;
    private $initializered68b = null;
    private static $publicPropertiescea1a = [
        
    ];
    public function install($path, $source = 0)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'install', array('path' => $path, 'source' => $source), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->install($path, $source);
    }
    public function installWithCode($code)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'installWithCode', array('code' => $code), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->installWithCode($code);
    }
    public function preInstall()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'preInstall', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->preInstall();
    }
    public function postInstall($config, $source)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'postInstall', array('config' => $config, 'source' => $source), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->postInstall($config, $source);
    }
    public function generateProxyAndUpdateSchema(\Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $saveMode = true)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'generateProxyAndUpdateSchema', array('plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'saveMode' => $saveMode), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->generateProxyAndUpdateSchema($plugin, $config, $uninstall, $saveMode);
    }
    public function generateProxyAndCallback(callable $callback, \Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $tmpProxyOutputDir = null)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'generateProxyAndCallback', array('callback' => $callback, 'plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'tmpProxyOutputDir' => $tmpProxyOutputDir), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->generateProxyAndCallback($callback, $plugin, $config, $uninstall, $tmpProxyOutputDir);
    }
    public function createTempDir()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'createTempDir', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->createTempDir();
    }
    public function deleteDirs($arr)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'deleteDirs', array('arr' => $arr), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->deleteDirs($arr);
    }
    public function unpackPluginArchive($archive, $dir)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'unpackPluginArchive', array('archive' => $archive, 'dir' => $dir), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->unpackPluginArchive($archive, $dir);
    }
    public function checkPluginArchiveContent($dir, array $config_cache = [])
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'checkPluginArchiveContent', array('dir' => $dir, 'config_cache' => $config_cache), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->checkPluginArchiveContent($dir, $config_cache);
    }
    public function readConfig($pluginDir)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'readConfig', array('pluginDir' => $pluginDir), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->readConfig($pluginDir);
    }
    public function checkSymbolName($string)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'checkSymbolName', array('string' => $string), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->checkSymbolName($string);
    }
    public function deleteFile($path)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'deleteFile', array('path' => $path), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->deleteFile($path);
    }
    public function checkSamePlugin($code)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'checkSamePlugin', array('code' => $code), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->checkSamePlugin($code);
    }
    public function calcPluginDir($code)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'calcPluginDir', array('code' => $code), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->calcPluginDir($code);
    }
    public function createPluginDir($d)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'createPluginDir', array('d' => $d), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->createPluginDir($d);
    }
    public function registerPlugin($meta, $source = 0)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'registerPlugin', array('meta' => $meta, 'source' => $source), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->registerPlugin($meta, $source);
    }
    public function callPluginManagerMethod($meta, $method)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'callPluginManagerMethod', array('meta' => $meta, 'method' => $method), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->callPluginManagerMethod($meta, $method);
    }
    public function uninstall(\Eccube\Entity\Plugin $plugin, $force = true)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'uninstall', array('plugin' => $plugin, 'force' => $force), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->uninstall($plugin, $force);
    }
    public function unregisterPlugin(\Eccube\Entity\Plugin $p)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'unregisterPlugin', array('p' => $p), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->unregisterPlugin($p);
    }
    public function disable(\Eccube\Entity\Plugin $plugin)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'disable', array('plugin' => $plugin), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->disable($plugin);
    }
    public function enable(\Eccube\Entity\Plugin $plugin, $enable = true)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'enable', array('plugin' => $plugin, 'enable' => $enable), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->enable($plugin, $enable);
    }
    public function update(\Eccube\Entity\Plugin $plugin, $path)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'update', array('plugin' => $plugin, 'path' => $path), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->update($plugin, $path);
    }
    public function updatePlugin(\Eccube\Entity\Plugin $plugin, $meta)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'updatePlugin', array('plugin' => $plugin, 'meta' => $meta), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->updatePlugin($plugin, $meta);
    }
    public function getPluginRequired($plugin)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'getPluginRequired', array('plugin' => $plugin), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->getPluginRequired($plugin);
    }
    public function findDependentPluginNeedDisable($pluginCode)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'findDependentPluginNeedDisable', array('pluginCode' => $pluginCode), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->findDependentPluginNeedDisable($pluginCode);
    }
    public function findDependentPlugin($pluginCode, $enableOnly = false)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'findDependentPlugin', array('pluginCode' => $pluginCode, 'enableOnly' => $enableOnly), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->findDependentPlugin($pluginCode, $enableOnly);
    }
    public function getDependentByCode($pluginCode, $libraryType = null)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'getDependentByCode', array('pluginCode' => $pluginCode, 'libraryType' => $libraryType), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->getDependentByCode($pluginCode, $libraryType);
    }
    public function parseToComposerCommand(array $packages, $getVersion = true)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'parseToComposerCommand', array('packages' => $packages, 'getVersion' => $getVersion), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->parseToComposerCommand($packages, $getVersion);
    }
    public function copyAssets($pluginCode)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'copyAssets', array('pluginCode' => $pluginCode), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->copyAssets($pluginCode);
    }
    public function removeAssets($pluginCode)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'removeAssets', array('pluginCode' => $pluginCode), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->removeAssets($pluginCode);
    }
    public function checkPluginExist($plugins, $pluginCode)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'checkPluginExist', array('plugins' => $plugins, 'pluginCode' => $pluginCode), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->checkPluginExist($plugins, $pluginCode);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig, $instance->entityManager, $instance->pluginRepository, $instance->entityProxyService, $instance->schemaService, $instance->composerService, $instance->container, $instance->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\PluginService')->__invoke($instance);
        $instance->initializered68b = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\PluginRepository $pluginRepository, \Eccube\Service\EntityProxyService $entityProxyService, \Eccube\Service\SchemaService $schemaService, \Eccube\Common\EccubeConfig $eccubeConfig, \Symfony\Component\DependencyInjection\ContainerInterface $container, \Eccube\Util\CacheUtil $cacheUtil, \Eccube\Service\Composer\ComposerServiceInterface $composerService, \Eccube\Service\PluginApiService $pluginApiService, \Eccube\Service\SystemService $systemService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;
        if (! $this->valueHolderf6ecf) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\PluginService');
            $this->valueHolderf6ecf = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
        }
        $this->valueHolderf6ecf->__construct($entityManager, $pluginRepository, $entityProxyService, $schemaService, $eccubeConfig, $container, $cacheUtil, $composerService, $pluginApiService, $systemService, $pluginContext);
    }
    public function & __get($name)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, '__get', ['name' => $name], $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        if (isset(self::$publicPropertiescea1a[$name])) {
            return $this->valueHolderf6ecf->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6ecf;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf6ecf;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6ecf;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf6ecf;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, '__isset', array('name' => $name), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6ecf;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderf6ecf;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, '__unset', array('name' => $name), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6ecf;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderf6ecf;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, '__clone', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        $this->valueHolderf6ecf = clone $this->valueHolderf6ecf;
    }
    public function __sleep()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, '__sleep', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return array('valueHolderf6ecf');
    }
    public function __wakeup()
    {
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializered68b = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializered68b;
    }
    public function initializeProxy() : bool
    {
        return $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'initializeProxy', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf6ecf;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf6ecf;
    }
}

if (!\class_exists('PluginService_e75fd88', false)) {
    \class_alias(__NAMESPACE__.'\\PluginService_e75fd88', 'PluginService_e75fd88', false);
}
