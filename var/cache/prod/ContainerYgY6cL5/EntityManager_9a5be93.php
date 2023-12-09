<?php

namespace ContainerYgY6cL5;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder47245 = null;
    private $initializer013a0 = null;
    private static $publicProperties7eb80 = [
        
    ];
    public function getConnection()
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'getConnection', array(), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'getMetadataFactory', array(), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'getExpressionBuilder', array(), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'beginTransaction', array(), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'getCache', array(), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->getCache();
    }
    public function transactional($func)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'transactional', array('func' => $func), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'wrapInTransaction', array('func' => $func), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'commit', array(), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->commit();
    }
    public function rollback()
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'rollback', array(), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'getClassMetadata', array('className' => $className), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'createQuery', array('dql' => $dql), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'createNamedQuery', array('name' => $name), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'createQueryBuilder', array(), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'flush', array('entity' => $entity), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'clear', array('entityName' => $entityName), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->clear($entityName);
    }
    public function close()
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'close', array(), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->close();
    }
    public function persist($entity)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'persist', array('entity' => $entity), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'remove', array('entity' => $entity), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'refresh', array('entity' => $entity), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'detach', array('entity' => $entity), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'merge', array('entity' => $entity), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'getRepository', array('entityName' => $entityName), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'contains', array('entity' => $entity), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'getEventManager', array(), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'getConfiguration', array(), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'isOpen', array(), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'getUnitOfWork', array(), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'getProxyFactory', array(), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'initializeObject', array('obj' => $obj), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'getFilters', array(), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'isFiltersStateClean', array(), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'hasFilters', array(), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return $this->valueHolder47245->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer013a0 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder47245) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder47245 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder47245->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, '__get', ['name' => $name], $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        if (isset(self::$publicProperties7eb80[$name])) {
            return $this->valueHolder47245->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47245;
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
        $targetObject = $this->valueHolder47245;
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
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47245;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder47245;
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
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, '__isset', array('name' => $name), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47245;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder47245;
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
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, '__unset', array('name' => $name), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47245;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder47245;
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
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, '__clone', array(), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        $this->valueHolder47245 = clone $this->valueHolder47245;
    }
    public function __sleep()
    {
        $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, '__sleep', array(), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
        return array('valueHolder47245');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer013a0 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer013a0;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer013a0 && ($this->initializer013a0->__invoke($valueHolder47245, $this, 'initializeProxy', array(), $this->initializer013a0) || 1) && $this->valueHolder47245 = $valueHolder47245;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder47245;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder47245;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
