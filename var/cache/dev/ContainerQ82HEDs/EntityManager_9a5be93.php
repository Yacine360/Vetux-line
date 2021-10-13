<?php

namespace ContainerQ82HEDs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder210d1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer60833 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4ce3f = [
        
    ];

    public function getConnection()
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'getConnection', array(), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'getMetadataFactory', array(), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'getExpressionBuilder', array(), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'beginTransaction', array(), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'getCache', array(), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->getCache();
    }

    public function transactional($func)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'transactional', array('func' => $func), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'wrapInTransaction', array('func' => $func), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'commit', array(), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->commit();
    }

    public function rollback()
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'rollback', array(), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'getClassMetadata', array('className' => $className), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'createQuery', array('dql' => $dql), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'createNamedQuery', array('name' => $name), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'createQueryBuilder', array(), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'flush', array('entity' => $entity), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'clear', array('entityName' => $entityName), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->clear($entityName);
    }

    public function close()
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'close', array(), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->close();
    }

    public function persist($entity)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'persist', array('entity' => $entity), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'remove', array('entity' => $entity), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'refresh', array('entity' => $entity), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'detach', array('entity' => $entity), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'merge', array('entity' => $entity), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'getRepository', array('entityName' => $entityName), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'contains', array('entity' => $entity), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'getEventManager', array(), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'getConfiguration', array(), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'isOpen', array(), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'getUnitOfWork', array(), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'getProxyFactory', array(), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'initializeObject', array('obj' => $obj), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'getFilters', array(), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'isFiltersStateClean', array(), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'hasFilters', array(), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return $this->valueHolder210d1->hasFilters();
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

        $instance->initializer60833 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder210d1) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder210d1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder210d1->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, '__get', ['name' => $name], $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        if (isset(self::$publicProperties4ce3f[$name])) {
            return $this->valueHolder210d1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder210d1;

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

        $targetObject = $this->valueHolder210d1;
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
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder210d1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder210d1;
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
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, '__isset', array('name' => $name), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder210d1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder210d1;
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
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, '__unset', array('name' => $name), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder210d1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder210d1;
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
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, '__clone', array(), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        $this->valueHolder210d1 = clone $this->valueHolder210d1;
    }

    public function __sleep()
    {
        $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, '__sleep', array(), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;

        return array('valueHolder210d1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer60833 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer60833;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer60833 && ($this->initializer60833->__invoke($valueHolder210d1, $this, 'initializeProxy', array(), $this->initializer60833) || 1) && $this->valueHolder210d1 = $valueHolder210d1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder210d1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder210d1;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
