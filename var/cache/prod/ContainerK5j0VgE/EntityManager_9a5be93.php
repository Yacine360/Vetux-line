<?php

namespace ContainerK5j0VgE;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderb5814 = null;
    private $initializerfed39 = null;
    private static $publicProperties37317 = [
        
    ];
    public function getConnection()
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'getConnection', array(), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'getMetadataFactory', array(), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'getExpressionBuilder', array(), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'beginTransaction', array(), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'getCache', array(), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->getCache();
    }
    public function transactional($func)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'transactional', array('func' => $func), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'commit', array(), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->commit();
    }
    public function rollback()
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'rollback', array(), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'getClassMetadata', array('className' => $className), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'createQuery', array('dql' => $dql), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'createNamedQuery', array('name' => $name), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'createQueryBuilder', array(), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'flush', array('entity' => $entity), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'clear', array('entityName' => $entityName), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->clear($entityName);
    }
    public function close()
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'close', array(), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->close();
    }
    public function persist($entity)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'persist', array('entity' => $entity), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'remove', array('entity' => $entity), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'refresh', array('entity' => $entity), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'detach', array('entity' => $entity), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'merge', array('entity' => $entity), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'contains', array('entity' => $entity), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'getEventManager', array(), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'getConfiguration', array(), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'isOpen', array(), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'getUnitOfWork', array(), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'getProxyFactory', array(), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'initializeObject', array('obj' => $obj), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'getFilters', array(), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'isFiltersStateClean', array(), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'hasFilters', array(), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return $this->valueHolderb5814->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerfed39 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderb5814) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb5814 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderb5814->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, '__get', ['name' => $name], $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        if (isset(self::$publicProperties37317[$name])) {
            return $this->valueHolderb5814->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5814;
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
        $targetObject = $this->valueHolderb5814;
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
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5814;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderb5814;
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
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, '__isset', array('name' => $name), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5814;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderb5814;
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
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, '__unset', array('name' => $name), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5814;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderb5814;
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
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, '__clone', array(), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        $this->valueHolderb5814 = clone $this->valueHolderb5814;
    }
    public function __sleep()
    {
        $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, '__sleep', array(), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
        return array('valueHolderb5814');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfed39 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfed39;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerfed39 && ($this->initializerfed39->__invoke($valueHolderb5814, $this, 'initializeProxy', array(), $this->initializerfed39) || 1) && $this->valueHolderb5814 = $valueHolderb5814;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb5814;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb5814;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
