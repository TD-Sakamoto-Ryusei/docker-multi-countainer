<?php

namespace Container2mka5Nx;

include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/PluginRepository.php';
class PluginRepository_c4546a6 extends \Eccube\Repository\PluginRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf6ecf = null;
    private $initializered68b = null;
    private static $publicPropertiescea1a = [
        
    ];
    public function findAllEnabled()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'findAllEnabled', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->findAllEnabled();
    }
    public function findByCode($code)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'findByCode', array('code' => $code), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->findByCode($code);
    }
    public function delete($entity)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'delete', array('entity' => $entity), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->delete($entity);
    }
    public function save($entity)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'save', array('entity' => $entity), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->save($entity);
    }
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->createQueryBuilder($alias, $indexBy);
    }
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->createResultSetMappingBuilder($alias);
    }
    public function createNamedQuery($queryName)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->createNamedQuery($queryName);
    }
    public function createNativeNamedQuery($queryName)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->createNativeNamedQuery($queryName);
    }
    public function clear()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'clear', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->clear();
    }
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->find($id, $lockMode, $lockVersion);
    }
    public function findAll()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'findAll', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->findAll();
    }
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->findBy($criteria, $orderBy, $limit, $offset);
    }
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->findOneBy($criteria, $orderBy);
    }
    public function count(array $criteria)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'count', array('criteria' => $criteria), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->count($criteria);
    }
    public function __call($method, $arguments)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->__call($method, $arguments);
    }
    public function getClassName()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'getClassName', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->getClassName();
    }
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'matching', array('criteria' => $criteria), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->matching($criteria);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig, $instance->_entityName, $instance->_em, $instance->_class);
        $instance->initializered68b = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\Persistence\ManagerRegistry $registry)
    {
        static $reflection;
        if (! $this->valueHolderf6ecf) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Repository\\PluginRepository');
            $this->valueHolderf6ecf = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
        }
        $this->valueHolderf6ecf->__construct($registry);
    }
    public function & __get($name)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, '__get', ['name' => $name], $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        if (isset(self::$publicPropertiescea1a[$name])) {
            return $this->valueHolderf6ecf->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
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

if (!\class_exists('PluginRepository_c4546a6', false)) {
    \class_alias(__NAMESPACE__.'\\PluginRepository_c4546a6', 'PluginRepository_c4546a6', false);
}
