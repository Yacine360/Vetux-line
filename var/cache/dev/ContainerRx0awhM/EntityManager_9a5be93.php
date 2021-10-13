<?php

namespace ContainerRx0awhM;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2de23 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf42d0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties192c5 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'getConnection', array(), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'getMetadataFactory', array(), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'getExpressionBuilder', array(), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'beginTransaction', array(), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'getCache', array(), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'transactional', array('func' => $func), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'commit', array(), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->commit();
    }

    public function rollback()
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'rollback', array(), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'getClassMetadata', array('className' => $className), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'createQuery', array('dql' => $dql), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'createNamedQuery', array('name' => $name), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'createQueryBuilder', array(), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'flush', array('entity' => $entity), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'clear', array('entityName' => $entityName), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->clear($entityName);
    }

    public function close()
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'close', array(), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->close();
    }

    public function persist($entity)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'persist', array('entity' => $entity), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'remove', array('entity' => $entity), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'refresh', array('entity' => $entity), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'detach', array('entity' => $entity), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'merge', array('entity' => $entity), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'contains', array('entity' => $entity), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'getEventManager', array(), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'getConfiguration', array(), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'isOpen', array(), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'getUnitOfWork', array(), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'getProxyFactory', array(), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'initializeObject', array('obj' => $obj), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'getFilters', array(), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'isFiltersStateClean', array(), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'hasFilters', array(), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return $this->valueHolder2de23->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerf42d0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2de23) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2de23 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2de23->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, '__get', ['name' => $name], $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        if (isset(self::$publicProperties192c5[$name])) {
            return $this->valueHolder2de23->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2de23;

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

        $targetObject = $this->valueHolder2de23;
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
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2de23;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2de23;
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
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, '__isset', array('name' => $name), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2de23;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2de23;
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
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, '__unset', array('name' => $name), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2de23;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2de23;
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
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, '__clone', array(), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        $this->valueHolder2de23 = clone $this->valueHolder2de23;
    }

    public function __sleep()
    {
        $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, '__sleep', array(), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;

        return array('valueHolder2de23');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf42d0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf42d0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf42d0 && ($this->initializerf42d0->__invoke($valueHolder2de23, $this, 'initializeProxy', array(), $this->initializerf42d0) || 1) && $this->valueHolder2de23 = $valueHolder2de23;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2de23;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2de23;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
