<?php

namespace ContainerZvkGENt;

include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderae812 = null;
    private $initializerae3c7 = null;
    private static $publicPropertiesf4365 = [
        
    ];
    public function getConnection()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getConnection', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getMetadataFactory', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getExpressionBuilder', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'beginTransaction', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getCache', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getCache();
    }
    public function transactional($func)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'transactional', array('func' => $func), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'wrapInTransaction', array('func' => $func), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'commit', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->commit();
    }
    public function rollback()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'rollback', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getClassMetadata', array('className' => $className), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'createQuery', array('dql' => $dql), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'createNamedQuery', array('name' => $name), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'createQueryBuilder', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'flush', array('entity' => $entity), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'clear', array('entityName' => $entityName), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->clear($entityName);
    }
    public function close()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'close', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->close();
    }
    public function persist($entity)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'persist', array('entity' => $entity), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'remove', array('entity' => $entity), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'refresh', array('entity' => $entity), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'detach', array('entity' => $entity), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'merge', array('entity' => $entity), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getRepository', array('entityName' => $entityName), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'contains', array('entity' => $entity), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getEventManager', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getConfiguration', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'isOpen', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getUnitOfWork', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getProxyFactory', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'initializeObject', array('obj' => $obj), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'getFilters', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'isFiltersStateClean', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, 'hasFilters', array(), $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        return $this->valueHolderae812->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerae3c7 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHolderae812) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderae812 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderae812->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializerae3c7 && ($this->initializerae3c7->__invoke($valueHolderae812, $this, '__get', ['name' => $name], $this->initializerae3c7) || 1) && $this->valueHolderae812 = $valueHolderae812;
        if (isset(self::$publicPropertiesf4365[$name])) {
            return $this->valueHolderae812->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
