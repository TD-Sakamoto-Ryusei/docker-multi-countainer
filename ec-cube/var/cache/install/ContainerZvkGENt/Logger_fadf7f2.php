<?php

namespace ContainerZvkGENt;

include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/AbstractLogger.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Log/Logger.php';
class Logger_fadf7f2 extends \Eccube\Log\Logger implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderae812 = null;
    private $initializerae3c7 = null;
    private static $publicPropertiesf4365 = [
        
    ];
    public function log($level, $message, array $context = [])
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'log', array('level' => $level, 'message' => $message, 'context' => $context), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->log($level, $message, $context);
    }
    public function emergency($message, array $context = [])
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'emergency', array('message' => $message, 'context' => $context), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->emergency($message, $context);
    }
    public function alert($message, array $context = [])
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'alert', array('message' => $message, 'context' => $context), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->alert($message, $context);
    }
    public function critical($message, array $context = [])
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'critical', array('message' => $message, 'context' => $context), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->critical($message, $context);
    }
    public function error($message, array $context = [])
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'error', array('message' => $message, 'context' => $context), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->error($message, $context);
    }
    public function warning($message, array $context = [])
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'warning', array('message' => $message, 'context' => $context), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->warning($message, $context);
    }
    public function notice($message, array $context = [])
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'notice', array('message' => $message, 'context' => $context), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->notice($message, $context);
    }
    public function info($message, array $context = [])
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'info', array('message' => $message, 'context' => $context), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->info($message, $context);
    }
    public function debug($message, array $context = [])
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'debug', array('message' => $message, 'context' => $context), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->debug($message, $context);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->context, $instance->logger, $instance->frontLogger, $instance->adminLogger);
        $instance->initializerae3c7 = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Request\Context $context, \Psr\Log\LoggerInterface $logger, \Psr\Log\LoggerInterface $frontLogger, \Psr\Log\LoggerInterface $adminLogger)
    {
        static $reflection;
        if (! $this->valueHolderae812) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Log\\Logger');
            $this->valueHolderae812 = $reflection->newInstanceWithoutConstructor();
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
        }
        $this->valueHolderae812->__construct($context, $logger, $frontLogger, $adminLogger);
    }
    public function & __get($name)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, '__get', ['name' => $name], $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        if (isset(self::$publicPropertiesf4365[$name])) {
            return $this->valueHolderae812->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
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

if (!\class_exists('Logger_fadf7f2', false)) {
    \class_alias(__NAMESPACE__.'\\Logger_fadf7f2', 'Logger_fadf7f2', false);
}
