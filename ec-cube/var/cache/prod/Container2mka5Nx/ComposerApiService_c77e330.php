<?php

namespace Container2mka5Nx;

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/Composer/ComposerServiceInterface.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/Composer/ComposerApiService.php';
class ComposerApiService_c77e330 extends \Eccube\Service\Composer\ComposerApiService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf6ecf = null;
    private $initializered68b = null;
    private static $publicPropertiescea1a = [
        
    ];
    public function execInfo($pluginName, $version)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'execInfo', array('pluginName' => $pluginName, 'version' => $version), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->execInfo($pluginName, $version);
    }
    public function execRequire($packageName, $output = null)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'execRequire', array('packageName' => $packageName, 'output' => $output), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->execRequire($packageName, $output);
    }
    public function execRemove($packageName, $output = null)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'execRemove', array('packageName' => $packageName, 'output' => $output), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->execRemove($packageName, $output);
    }
    public function execUpdate($dryRun, $output = null)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'execUpdate', array('dryRun' => $dryRun, 'output' => $output), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->execUpdate($dryRun, $output);
    }
    public function execInstall($dryRun, $output = null)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'execInstall', array('dryRun' => $dryRun, 'output' => $output), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->execInstall($dryRun, $output);
    }
    public function foreachRequires($packageName, $version, $callback, $typeFilter = null, $level = 0) : void
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'foreachRequires', array('packageName' => $packageName, 'version' => $version, 'callback' => $callback, 'typeFilter' => $typeFilter, 'level' => $level), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        $this->valueHolderf6ecf->foreachRequires($packageName, $version, $callback, $typeFilter, $level);
return;
    }
    public function execConfig($key, $value = null)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'execConfig', array('key' => $key, 'value' => $value), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->execConfig($key, $value);
    }
    public function getConfig()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'getConfig', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->getConfig();
    }
    public function setWorkingDir($workingDir)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'setWorkingDir', array('workingDir' => $workingDir), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->setWorkingDir($workingDir);
    }
    public function runCommand($commands, $output = null, $init = true)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'runCommand', array('commands' => $commands, 'output' => $output, 'init' => $init), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->runCommand($commands, $output, $init);
    }
    public function configureRepository(\Eccube\Entity\BaseInfo $BaseInfo) : void
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'configureRepository', array('BaseInfo' => $BaseInfo), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        $this->valueHolderf6ecf->configureRepository($BaseInfo);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($instance);
        $instance->initializered68b = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Common\EccubeConfig $eccubeConfig, \Eccube\Repository\BaseInfoRepository $baseInfoRepository, \Eccube\Service\SchemaService $schemaService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;
        if (! $this->valueHolderf6ecf) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
            $this->valueHolderf6ecf = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($this);
        }
        $this->valueHolderf6ecf->__construct($eccubeConfig, $baseInfoRepository, $schemaService, $pluginContext);
    }
    public function & __get($name)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, '__get', ['name' => $name], $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        if (isset(self::$publicPropertiescea1a[$name])) {
            return $this->valueHolderf6ecf->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        unset($this->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($this);
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

if (!\class_exists('ComposerApiService_c77e330', false)) {
    \class_alias(__NAMESPACE__.'\\ComposerApiService_c77e330', 'ComposerApiService_c77e330', false);
}
