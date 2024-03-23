<?php

namespace ContainerMEuPoQr;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4d309 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercc5b2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties256f6 = [
        
    ];

    public function getConnection()
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'getConnection', array(), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'getMetadataFactory', array(), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'getExpressionBuilder', array(), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'beginTransaction', array(), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'getCache', array(), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->getCache();
    }

    public function transactional($func)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'transactional', array('func' => $func), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'wrapInTransaction', array('func' => $func), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'commit', array(), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->commit();
    }

    public function rollback()
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'rollback', array(), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'getClassMetadata', array('className' => $className), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'createQuery', array('dql' => $dql), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'createNamedQuery', array('name' => $name), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'createQueryBuilder', array(), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'flush', array('entity' => $entity), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'clear', array('entityName' => $entityName), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->clear($entityName);
    }

    public function close()
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'close', array(), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->close();
    }

    public function persist($entity)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'persist', array('entity' => $entity), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'remove', array('entity' => $entity), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'refresh', array('entity' => $entity), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'detach', array('entity' => $entity), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'merge', array('entity' => $entity), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'getRepository', array('entityName' => $entityName), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'contains', array('entity' => $entity), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'getEventManager', array(), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'getConfiguration', array(), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'isOpen', array(), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'getUnitOfWork', array(), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'getProxyFactory', array(), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'initializeObject', array('obj' => $obj), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'getFilters', array(), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'isFiltersStateClean', array(), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'hasFilters', array(), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return $this->valueHolder4d309->hasFilters();
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

        $instance->initializercc5b2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4d309) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4d309 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4d309->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, '__get', ['name' => $name], $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        if (isset(self::$publicProperties256f6[$name])) {
            return $this->valueHolder4d309->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d309;

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

        $targetObject = $this->valueHolder4d309;
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
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d309;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4d309;
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
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, '__isset', array('name' => $name), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d309;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4d309;
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
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, '__unset', array('name' => $name), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d309;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4d309;
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
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, '__clone', array(), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        $this->valueHolder4d309 = clone $this->valueHolder4d309;
    }

    public function __sleep()
    {
        $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, '__sleep', array(), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;

        return array('valueHolder4d309');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercc5b2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercc5b2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercc5b2 && ($this->initializercc5b2->__invoke($valueHolder4d309, $this, 'initializeProxy', array(), $this->initializercc5b2) || 1) && $this->valueHolder4d309 = $valueHolder4d309;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4d309;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4d309;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
