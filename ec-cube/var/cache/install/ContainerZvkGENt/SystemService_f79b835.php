<?php

namespace ContainerZvkGENt;

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/SystemService.php';
class SystemService_f79b835 extends \Eccube\Service\SystemService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderae812 = null;
    private $initializerae3c7 = null;
    private static $publicPropertiesf4365 = [
        
    ];
    public function getDbversion()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getDbversion', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getDbversion();
    }
    public function canSetMemoryLimit($memory)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'canSetMemoryLimit', array('memory' => $memory), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->canSetMemoryLimit($memory);
    }
    public function getMemoryLimit()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getMemoryLimit', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getMemoryLimit();
    }
    public function switchMaintenance($isEnable = false, $mode = 'auto_maintenance', bool $force = false)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'switchMaintenance', array('isEnable' => $isEnable, 'mode' => $mode, 'force' => $force), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->switchMaintenance($isEnable, $mode, $force);
    }
    public function getMaintenanceToken() : ?string
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getMaintenanceToken', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getMaintenanceToken();
    }
    public function disableMaintenanceEvent(\Symfony\Component\HttpKernel\Event\TerminateEvent $event)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'disableMaintenanceEvent', array('event' => $event), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->disableMaintenanceEvent($event);
    }
    public function enableMaintenance($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'enableMaintenance', array('mode' => $mode, 'force' => $force), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        $this->valueHolderae812->enableMaintenance($mode, $force);
return;
    }
    public function disableMaintenance($mode = 'auto_maintenance')
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'disableMaintenance', array('mode' => $mode), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->disableMaintenance($mode);
    }
    public function disableMaintenanceNow($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'disableMaintenanceNow', array('mode' => $mode, 'force' => $force), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        $this->valueHolderae812->disableMaintenanceNow($mode, $force);
return;
    }
    public function isMaintenanceMode()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'isMaintenanceMode', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->isMaintenanceMode();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->entityManager, $instance->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $instance, 'Eccube\\Service\\SystemService')->__invoke($instance);
        $instance->initializerae3c7 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        static $reflection;
        if (! $this->valueHolderae812) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\SystemService');
            $this->valueHolderae812 = $reflection->newInstanceWithoutConstructor();
        unset($this->entityManager, $this->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);
        }
        $this->valueHolderae812->__construct($entityManager, $container);
    }
    public function & __get($name)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, '__get', ['name' => $name], $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        if (isset(self::$publicPropertiesf4365[$name])) {
            return $this->valueHolderae812->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        unset($this->entityManager, $this->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);
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

if (!\class_exists('SystemService_f79b835', false)) {
    \class_alias(__NAMESPACE__.'\\SystemService_f79b835', 'SystemService_f79b835', false);
}
