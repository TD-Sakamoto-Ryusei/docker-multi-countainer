<?php

namespace ContainerZvkGENt;

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PluginService.php';
class PluginService_e75fd88 extends \Eccube\Service\PluginService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderae812 = null;
    private $initializerae3c7 = null;
    private static $publicPropertiesf4365 = [
        
    ];
    public function install($path, $source = 0)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'install', array('path' => $path, 'source' => $source), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->install($path, $source);
    }
    public function installWithCode($code)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'installWithCode', array('code' => $code), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->installWithCode($code);
    }
    public function preInstall()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'preInstall', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->preInstall();
    }
    public function postInstall($config, $source)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'postInstall', array('config' => $config, 'source' => $source), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->postInstall($config, $source);
    }
    public function generateProxyAndUpdateSchema(\Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $saveMode = true)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'generateProxyAndUpdateSchema', array('plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'saveMode' => $saveMode), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->generateProxyAndUpdateSchema($plugin, $config, $uninstall, $saveMode);
    }
    public function generateProxyAndCallback(callable $callback, \Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $tmpProxyOutputDir = null)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'generateProxyAndCallback', array('callback' => $callback, 'plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'tmpProxyOutputDir' => $tmpProxyOutputDir), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->generateProxyAndCallback($callback, $plugin, $config, $uninstall, $tmpProxyOutputDir);
    }
    public function createTempDir()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'createTempDir', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->createTempDir();
    }
    public function deleteDirs($arr)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'deleteDirs', array('arr' => $arr), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->deleteDirs($arr);
    }
    public function unpackPluginArchive($archive, $dir)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'unpackPluginArchive', array('archive' => $archive, 'dir' => $dir), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->unpackPluginArchive($archive, $dir);
    }
    public function checkPluginArchiveContent($dir, array $config_cache = [])
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'checkPluginArchiveContent', array('dir' => $dir, 'config_cache' => $config_cache), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->checkPluginArchiveContent($dir, $config_cache);
    }
    public function readConfig($pluginDir)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'readConfig', array('pluginDir' => $pluginDir), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->readConfig($pluginDir);
    }
    public function checkSymbolName($string)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'checkSymbolName', array('string' => $string), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->checkSymbolName($string);
    }
    public function deleteFile($path)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'deleteFile', array('path' => $path), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->deleteFile($path);
    }
    public function checkSamePlugin($code)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'checkSamePlugin', array('code' => $code), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->checkSamePlugin($code);
    }
    public function calcPluginDir($code)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'calcPluginDir', array('code' => $code), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->calcPluginDir($code);
    }
    public function createPluginDir($d)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'createPluginDir', array('d' => $d), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->createPluginDir($d);
    }
    public function registerPlugin($meta, $source = 0)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'registerPlugin', array('meta' => $meta, 'source' => $source), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->registerPlugin($meta, $source);
    }
    public function callPluginManagerMethod($meta, $method)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'callPluginManagerMethod', array('meta' => $meta, 'method' => $method), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->callPluginManagerMethod($meta, $method);
    }
    public function uninstall(\Eccube\Entity\Plugin $plugin, $force = true)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'uninstall', array('plugin' => $plugin, 'force' => $force), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->uninstall($plugin, $force);
    }
    public function unregisterPlugin(\Eccube\Entity\Plugin $p)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'unregisterPlugin', array('p' => $p), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->unregisterPlugin($p);
    }
    public function disable(\Eccube\Entity\Plugin $plugin)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'disable', array('plugin' => $plugin), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->disable($plugin);
    }
    public function enable(\Eccube\Entity\Plugin $plugin, $enable = true)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'enable', array('plugin' => $plugin, 'enable' => $enable), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->enable($plugin, $enable);
    }
    public function update(\Eccube\Entity\Plugin $plugin, $path)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'update', array('plugin' => $plugin, 'path' => $path), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->update($plugin, $path);
    }
    public function updatePlugin(\Eccube\Entity\Plugin $plugin, $meta)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'updatePlugin', array('plugin' => $plugin, 'meta' => $meta), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->updatePlugin($plugin, $meta);
    }
    public function getPluginRequired($plugin)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getPluginRequired', array('plugin' => $plugin), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getPluginRequired($plugin);
    }
    public function findDependentPluginNeedDisable($pluginCode)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'findDependentPluginNeedDisable', array('pluginCode' => $pluginCode), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->findDependentPluginNeedDisable($pluginCode);
    }
    public function findDependentPlugin($pluginCode, $enableOnly = false)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'findDependentPlugin', array('pluginCode' => $pluginCode, 'enableOnly' => $enableOnly), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->findDependentPlugin($pluginCode, $enableOnly);
    }
    public function getDependentByCode($pluginCode, $libraryType = null)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getDependentByCode', array('pluginCode' => $pluginCode, 'libraryType' => $libraryType), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getDependentByCode($pluginCode, $libraryType);
    }
    public function parseToComposerCommand(array $packages, $getVersion = true)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'parseToComposerCommand', array('packages' => $packages, 'getVersion' => $getVersion), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->parseToComposerCommand($packages, $getVersion);
    }
    public function copyAssets($pluginCode)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'copyAssets', array('pluginCode' => $pluginCode), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->copyAssets($pluginCode);
    }
    public function removeAssets($pluginCode)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'removeAssets', array('pluginCode' => $pluginCode), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->removeAssets($pluginCode);
    }
    public function checkPluginExist($plugins, $pluginCode)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'checkPluginExist', array('plugins' => $plugins, 'pluginCode' => $pluginCode), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->checkPluginExist($plugins, $pluginCode);
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
        $instance->initializerae3c7 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\PluginRepository $pluginRepository, \Eccube\Service\EntityProxyService $entityProxyService, \Eccube\Service\SchemaService $schemaService, \Eccube\Common\EccubeConfig $eccubeConfig, \Symfony\Component\DependencyInjection\ContainerInterface $container, \Eccube\Util\CacheUtil $cacheUtil, \Eccube\Service\Composer\ComposerServiceInterface $composerService, \Eccube\Service\PluginApiService $pluginApiService, \Eccube\Service\SystemService $systemService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;
        if (! $this->valueHolderae812) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\PluginService');
            $this->valueHolderae812 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
        }
        $this->valueHolderae812->__construct($entityManager, $pluginRepository, $entityProxyService, $schemaService, $eccubeConfig, $container, $cacheUtil, $composerService, $pluginApiService, $systemService, $pluginContext);
    }
    public function & __get($name)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, '__get', ['name' => $name], $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        if (isset(self::$publicPropertiesf4365[$name])) {
            return $this->valueHolderae812->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderae812;
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
        $targetObject = $this->valueHolderae812;
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
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderae812;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderae812;
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
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, '__isset', array('name' => $name), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderae812;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderae812;
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
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, '__unset', array('name' => $name), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderae812;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderae812;
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
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, '__clone', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        $this->valueHolderae812 = clone $this->valueHolderae812;
    }
    public function __sleep()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, '__sleep', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return array('valueHolderae812');
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
        $this->initializerae3c7 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerae3c7;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'initializeProxy', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderae812;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderae812;
    }
}

if (!\class_exists('PluginService_e75fd88', false)) {
    \class_alias(__NAMESPACE__.'\\PluginService_e75fd88', 'PluginService_e75fd88', false);
}
