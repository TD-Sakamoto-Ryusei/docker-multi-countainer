<?php

namespace Container2mka5Nx;

include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf6ecf = null;
    private $initializered68b = null;
    private static $publicPropertiescea1a = [
        
    ];
    public function getConnection()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'getConnection', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'getMetadataFactory', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'getExpressionBuilder', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'beginTransaction', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->beginTransaction();
    }
    public function getCache()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'getCache', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->getCache();
    }
    public function transactional($func)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'transactional', array('func' => $func), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'wrapInTransaction', array('func' => $func), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'commit', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->commit();
    }
    public function rollback()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'rollback', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'getClassMetadata', array('className' => $className), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'createQuery', array('dql' => $dql), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'createNamedQuery', array('name' => $name), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'createQueryBuilder', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'flush', array('entity' => $entity), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'clear', array('entityName' => $entityName), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->clear($entityName);
    }
    public function close()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'close', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->close();
    }
    public function persist($entity)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'persist', array('entity' => $entity), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'remove', array('entity' => $entity), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'refresh', array('entity' => $entity), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'detach', array('entity' => $entity), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'merge', array('entity' => $entity), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'getRepository', array('entityName' => $entityName), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'contains', array('entity' => $entity), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'getEventManager', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'getConfiguration', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'isOpen', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'getUnitOfWork', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'getProxyFactory', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'initializeObject', array('obj' => $obj), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'getFilters', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'isFiltersStateClean', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, 'hasFilters', array(), $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        return $this->valueHolderf6ecf->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializered68b = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHolderf6ecf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf6ecf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderf6ecf->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializered68b && ($this->initializered68b->__invoke($valueHolderf6ecf, $this, '__get', ['name' => $name], $this->initializered68b) || 1) && $this->valueHolderf6ecf = $valueHolderf6ecf;
        if (isset(self::$publicPropertiescea1a[$name])) {
            return $this->valueHolderf6ecf->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
