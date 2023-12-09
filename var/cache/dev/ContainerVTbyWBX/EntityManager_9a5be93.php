<?php

namespace ContainerVTbyWBX;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder93f01 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera773a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese71c6 = [
        
    ];

    public function getConnection()
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'getConnection', array(), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'getMetadataFactory', array(), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'getExpressionBuilder', array(), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'beginTransaction', array(), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'getCache', array(), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->getCache();
    }

    public function transactional($func)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'transactional', array('func' => $func), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'wrapInTransaction', array('func' => $func), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'commit', array(), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->commit();
    }

    public function rollback()
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'rollback', array(), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'getClassMetadata', array('className' => $className), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'createQuery', array('dql' => $dql), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'createNamedQuery', array('name' => $name), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'createQueryBuilder', array(), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'flush', array('entity' => $entity), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'clear', array('entityName' => $entityName), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->clear($entityName);
    }

    public function close()
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'close', array(), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->close();
    }

    public function persist($entity)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'persist', array('entity' => $entity), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'remove', array('entity' => $entity), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'refresh', array('entity' => $entity), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'detach', array('entity' => $entity), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'merge', array('entity' => $entity), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'getRepository', array('entityName' => $entityName), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'contains', array('entity' => $entity), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'getEventManager', array(), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'getConfiguration', array(), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'isOpen', array(), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'getUnitOfWork', array(), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'getProxyFactory', array(), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'initializeObject', array('obj' => $obj), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'getFilters', array(), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'isFiltersStateClean', array(), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'hasFilters', array(), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return $this->valueHolder93f01->hasFilters();
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

        $instance->initializera773a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder93f01) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder93f01 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder93f01->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, '__get', ['name' => $name], $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        if (isset(self::$publicPropertiese71c6[$name])) {
            return $this->valueHolder93f01->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93f01;

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

        $targetObject = $this->valueHolder93f01;
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
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93f01;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder93f01;
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
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, '__isset', array('name' => $name), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93f01;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder93f01;
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
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, '__unset', array('name' => $name), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93f01;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder93f01;
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
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, '__clone', array(), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        $this->valueHolder93f01 = clone $this->valueHolder93f01;
    }

    public function __sleep()
    {
        $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, '__sleep', array(), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;

        return array('valueHolder93f01');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera773a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera773a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera773a && ($this->initializera773a->__invoke($valueHolder93f01, $this, 'initializeProxy', array(), $this->initializera773a) || 1) && $this->valueHolder93f01 = $valueHolder93f01;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder93f01;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder93f01;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
