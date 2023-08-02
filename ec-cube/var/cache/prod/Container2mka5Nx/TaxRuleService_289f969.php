<?php

namespace Container2mka5Nx;

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/TaxRuleService.php';
class TaxRuleService_289f969 extends \Eccube\Service\TaxRuleService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf6ecf = null;
    private $initializered68b = null;
    private static $publicPropertiescea1a = [
        
    ];
    public function getTax($price, $product = null, $productClass = null, $pref = null, $country = null)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'getTax', array('price' => $price, 'product' => $product, 'productClass' => $productClass, 'pref' => $pref, 'country' => $country), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->getTax($price, $product, $productClass, $pref, $country);
    }
    public function getPriceIncTax($price, $product = null, $productClass = null, $pref = null, $country = null)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'getPriceIncTax', array('price' => $price, 'product' => $product, 'productClass' => $productClass, 'pref' => $pref, 'country' => $country), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->getPriceIncTax($price, $product, $productClass, $pref, $country);
    }
    public function calcTax($price, $taxRate, $RoundingType, $taxAdjust = 0)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'calcTax', array('price' => $price, 'taxRate' => $taxRate, 'RoundingType' => $RoundingType, 'taxAdjust' => $taxAdjust), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->calcTax($price, $taxRate, $RoundingType, $taxAdjust);
    }
    public function calcTaxIncluded($price, $taxRate, $RoundingType, $taxAdjust = 0)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'calcTaxIncluded', array('price' => $price, 'taxRate' => $taxRate, 'RoundingType' => $RoundingType, 'taxAdjust' => $taxAdjust), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->calcTaxIncluded($price, $taxRate, $RoundingType, $taxAdjust);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->BaseInfo, $instance->taxRuleRepository);
        $instance->initializered68b = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Repository\TaxRuleRepository $taxRuleRepository, \Eccube\Repository\BaseInfoRepository $baseInfoRepository)
    {
        static $reflection;
        if (! $this->valueHolderf6ecf) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\TaxRuleService');
            $this->valueHolderf6ecf = $reflection->newInstanceWithoutConstructor();
        unset($this->BaseInfo, $this->taxRuleRepository);
        }
        $this->valueHolderf6ecf->__construct($taxRuleRepository, $baseInfoRepository);
    }
    public function & __get($name)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, '__get', ['name' => $name], $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        if (isset(self::$publicPropertiescea1a[$name])) {
            return $this->valueHolderf6ecf->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');
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
        unset($this->BaseInfo, $this->taxRuleRepository);
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

if (!\class_exists('TaxRuleService_289f969', false)) {
    \class_alias(__NAMESPACE__.'\\TaxRuleService_289f969', 'TaxRuleService_289f969', false);
}
