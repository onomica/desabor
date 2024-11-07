<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder9ab31 = null;
    private $initializer621a1 = null;
    private static $publicProperties00e9a = [
        
    ];
    public function getConnection()
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'getConnection', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'getMetadataFactory', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'getExpressionBuilder', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'beginTransaction', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'getCache', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->getCache();
    }
    public function transactional($func)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'transactional', array('func' => $func), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'wrapInTransaction', array('func' => $func), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'commit', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->commit();
    }
    public function rollback()
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'rollback', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'getClassMetadata', array('className' => $className), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'createQuery', array('dql' => $dql), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'createNamedQuery', array('name' => $name), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'createQueryBuilder', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'flush', array('entity' => $entity), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'clear', array('entityName' => $entityName), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->clear($entityName);
    }
    public function close()
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'close', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->close();
    }
    public function persist($entity)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'persist', array('entity' => $entity), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'remove', array('entity' => $entity), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'refresh', array('entity' => $entity), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'detach', array('entity' => $entity), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'merge', array('entity' => $entity), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'getRepository', array('entityName' => $entityName), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'contains', array('entity' => $entity), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'getEventManager', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'getConfiguration', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'isOpen', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'getUnitOfWork', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'getProxyFactory', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'initializeObject', array('obj' => $obj), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'getFilters', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'isFiltersStateClean', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'hasFilters', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer621a1 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder9ab31) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9ab31 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder9ab31->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, '__get', ['name' => $name], $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        if (isset(self::$publicProperties00e9a[$name])) {
            return $this->valueHolder9ab31->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ab31;
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
        $targetObject = $this->valueHolder9ab31;
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
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ab31;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder9ab31;
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
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, '__isset', array('name' => $name), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ab31;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder9ab31;
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
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, '__unset', array('name' => $name), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ab31;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder9ab31;
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
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, '__clone', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        $this->valueHolder9ab31 = clone $this->valueHolder9ab31;
    }
    public function __sleep()
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, '__sleep', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return array('valueHolder9ab31');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer621a1 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer621a1;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'initializeProxy', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9ab31;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9ab31;
    }
}
