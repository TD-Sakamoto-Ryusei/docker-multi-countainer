<?php

namespace Container2mka5Nx;

include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/AbstractLogger.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Log/Logger.php';
class Logger_fadf7f2 extends \Eccube\Log\Logger implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf6ecf = null;
    private $initializered68b = null;
    private static $publicPropertiescea1a = [
        
    ];
    public function log($level, $message, array $context = [])
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'log', array('level' => $level, 'message' => $message, 'context' => $context), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->log($level, $message, $context);
    }
    public function emergency($message, array $context = [])
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'emergency', array('message' => $message, 'context' => $context), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->emergency($message, $context);
    }
    public function alert($message, array $context = [])
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'alert', array('message' => $message, 'context' => $context), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->alert($message, $context);
    }
    public function critical($message, array $context = [])
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'critical', array('message' => $message, 'context' => $context), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->critical($message, $context);
    }
    public function error($message, array $context = [])
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'error', array('message' => $message, 'context' => $context), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->error($message, $context);
    }
    public function warning($message, array $context = [])
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'warning', array('message' => $message, 'context' => $context), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->warning($message, $context);
    }
    public function notice($message, array $context = [])
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'notice', array('message' => $message, 'context' => $context), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->notice($message, $context);
    }
    public function info($message, array $context = [])
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'info', array('message' => $message, 'context' => $context), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->info($message, $context);
    }
    public function debug($message, array $context = [])
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'debug', array('message' => $message, 'context' => $context), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->debug($message, $context);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->context, $instance->logger, $instance->frontLogger, $instance->adminLogger);
        $instance->initializered68b = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Request\Context $context, \Psr\Log\LoggerInterface $logger, \Psr\Log\LoggerInterface $frontLogger, \Psr\Log\LoggerInterface $adminLogger)
    {
        static $reflection;
        if (! $this->valueHolderf6ecf) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Log\\Logger');
            $this->valueHolderf6ecf = $reflection->newInstanceWithoutConstructor();
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
        }
        $this->valueHolderf6ecf->__construct($context, $logger, $frontLogger, $adminLogger);
    }
    public function & __get($name)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, '__get', ['name' => $name], $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        if (isset(self::$publicPropertiescea1a[$name])) {
            return $this->valueHolderf6ecf->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
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

if (!\class_exists('Logger_fadf7f2', false)) {
    \class_alias(__NAMESPACE__.'\\Logger_fadf7f2', 'Logger_fadf7f2', false);
}
