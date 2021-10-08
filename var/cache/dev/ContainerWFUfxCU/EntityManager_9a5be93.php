<?php

namespace ContainerWFUfxCU;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder61ac8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercee23 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1fa3b = [
        
    ];

    public function getConnection()
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'getConnection', array(), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'getMetadataFactory', array(), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'getExpressionBuilder', array(), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'beginTransaction', array(), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'getCache', array(), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->getCache();
    }

    public function transactional($func)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'transactional', array('func' => $func), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'wrapInTransaction', array('func' => $func), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'commit', array(), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->commit();
    }

    public function rollback()
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'rollback', array(), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'getClassMetadata', array('className' => $className), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'createQuery', array('dql' => $dql), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'createNamedQuery', array('name' => $name), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'createQueryBuilder', array(), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'flush', array('entity' => $entity), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'clear', array('entityName' => $entityName), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->clear($entityName);
    }

    public function close()
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'close', array(), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->close();
    }

    public function persist($entity)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'persist', array('entity' => $entity), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'remove', array('entity' => $entity), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'refresh', array('entity' => $entity), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'detach', array('entity' => $entity), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'merge', array('entity' => $entity), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'getRepository', array('entityName' => $entityName), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'contains', array('entity' => $entity), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'getEventManager', array(), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'getConfiguration', array(), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'isOpen', array(), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'getUnitOfWork', array(), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'getProxyFactory', array(), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'initializeObject', array('obj' => $obj), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'getFilters', array(), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'isFiltersStateClean', array(), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'hasFilters', array(), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return $this->valueHolder61ac8->hasFilters();
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

        $instance->initializercee23 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder61ac8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder61ac8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder61ac8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, '__get', ['name' => $name], $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        if (isset(self::$publicProperties1fa3b[$name])) {
            return $this->valueHolder61ac8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder61ac8;

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

        $targetObject = $this->valueHolder61ac8;
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
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder61ac8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder61ac8;
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
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, '__isset', array('name' => $name), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder61ac8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder61ac8;
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
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, '__unset', array('name' => $name), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder61ac8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder61ac8;
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
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, '__clone', array(), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        $this->valueHolder61ac8 = clone $this->valueHolder61ac8;
    }

    public function __sleep()
    {
        $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, '__sleep', array(), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;

        return array('valueHolder61ac8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercee23 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercee23;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercee23 && ($this->initializercee23->__invoke($valueHolder61ac8, $this, 'initializeProxy', array(), $this->initializercee23) || 1) && $this->valueHolder61ac8 = $valueHolder61ac8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder61ac8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder61ac8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
