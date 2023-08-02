<?php

namespace ContainerZvkGENt;

include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/TaxRuleRepository.php';
class TaxRuleRepository_f7111db extends \Eccube\Repository\TaxRuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderae812 = null;
    private $initializerae3c7 = null;
    private static $publicPropertiesf4365 = [
        
    ];
    public function newTaxRule()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'newTaxRule', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->newTaxRule();
    }
    public function getByRule($Product = null, $ProductClass = null, $Pref = null, $Country = null)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getByRule', array('Product' => $Product, 'ProductClass' => $ProductClass, 'Pref' => $Pref, 'Country' => $Country), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getByRule($Product, $ProductClass, $Pref, $Country);
    }
    public function getList()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getList', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getList();
    }
    public function delete($TaxRule)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'delete', array('TaxRule' => $TaxRule), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->delete($TaxRule);
    }
    public function clearCache()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'clearCache', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->clearCache();
    }
    public function save($entity)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'save', array('entity' => $entity), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->save($entity);
    }
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->createQueryBuilder($alias, $indexBy);
    }
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->createResultSetMappingBuilder($alias);
    }
    public function createNamedQuery($queryName)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->createNamedQuery($queryName);
    }
    public function createNativeNamedQuery($queryName)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->createNativeNamedQuery($queryName);
    }
    public function clear()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'clear', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->clear();
    }
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->find($id, $lockMode, $lockVersion);
    }
    public function findAll()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'findAll', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->findAll();
    }
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->findBy($criteria, $orderBy, $limit, $offset);
    }
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->findOneBy($criteria, $orderBy);
    }
    public function count(array $criteria)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'count', array('criteria' => $criteria), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->count($criteria);
    }
    public function __call($method, $arguments)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->__call($method, $arguments);
    }
    public function getClassName()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getClassName', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getClassName();
    }
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'matching', array('criteria' => $criteria), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->matching($criteria);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->baseInfo, $instance->authorizationChecker, $instance->tokenStorage, $instance->eccubeConfig, $instance->_entityName, $instance->_em, $instance->_class);
        \Closure::bind(function (\Eccube\Repository\TaxRuleRepository $instance) {
            unset($instance->rules);
        }, $instance, 'Eccube\\Repository\\TaxRuleRepository')->__invoke($instance);
        $instance->initializerae3c7 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\Persistence\ManagerRegistry $registry, \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface $tokenStorage, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Eccube\Repository\BaseInfoRepository $baseInfoRepository, \Eccube\Common\EccubeConfig $eccubeConfig)
    {
        static $reflection;
        if (! $this->valueHolderae812) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');
            $this->valueHolderae812 = $reflection->newInstanceWithoutConstructor();
        unset($this->baseInfo, $this->authorizationChecker, $this->tokenStorage, $this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
        \Closure::bind(function (\Eccube\Repository\TaxRuleRepository $instance) {
            unset($instance->rules);
        }, $this, 'Eccube\\Repository\\TaxRuleRepository')->__invoke($this);
        }
        $this->valueHolderae812->__construct($registry, $tokenStorage, $authorizationChecker, $baseInfoRepository, $eccubeConfig);
    }
    public function & __get($name)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, '__get', ['name' => $name], $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        if (isset(self::$publicPropertiesf4365[$name])) {
            return $this->valueHolderae812->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');
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
        unset($this->baseInfo, $this->authorizationChecker, $this->tokenStorage, $this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
        \Closure::bind(function (\Eccube\Repository\TaxRuleRepository $instance) {
            unset($instance->rules);
        }, $this, 'Eccube\\Repository\\TaxRuleRepository')->__invoke($this);
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

if (!\class_exists('TaxRuleRepository_f7111db', false)) {
    \class_alias(__NAMESPACE__.'\\TaxRuleRepository_f7111db', 'TaxRuleRepository_f7111db', false);
}
