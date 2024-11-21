<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdba48 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc45f0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdd96b = [
        
    ];

    public function getConnection()
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'getConnection', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'getMetadataFactory', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'getExpressionBuilder', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'beginTransaction', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'getCache', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'transactional', array('func' => $func), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'commit', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->commit();
    }

    public function rollback()
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'rollback', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'getClassMetadata', array('className' => $className), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'createQuery', array('dql' => $dql), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'createNamedQuery', array('name' => $name), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'createQueryBuilder', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'flush', array('entity' => $entity), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'clear', array('entityName' => $entityName), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->clear($entityName);
    }

    public function close()
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'close', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->close();
    }

    public function persist($entity)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'persist', array('entity' => $entity), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'remove', array('entity' => $entity), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'refresh', array('entity' => $entity), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'detach', array('entity' => $entity), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'merge', array('entity' => $entity), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'contains', array('entity' => $entity), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'getEventManager', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'getConfiguration', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'isOpen', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'getUnitOfWork', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'getProxyFactory', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'initializeObject', array('obj' => $obj), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'getFilters', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'isFiltersStateClean', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'hasFilters', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return $this->valueHolderdba48->hasFilters();
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

        $instance->initializerc45f0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdba48) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdba48 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdba48->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, '__get', ['name' => $name], $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        if (isset(self::$publicPropertiesdd96b[$name])) {
            return $this->valueHolderdba48->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdba48;

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

        $targetObject = $this->valueHolderdba48;
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
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdba48;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdba48;
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
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, '__isset', array('name' => $name), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdba48;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdba48;
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
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, '__unset', array('name' => $name), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdba48;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdba48;
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
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, '__clone', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        $this->valueHolderdba48 = clone $this->valueHolderdba48;
    }

    public function __sleep()
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, '__sleep', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;

        return array('valueHolderdba48');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc45f0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc45f0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'initializeProxy', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdba48;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdba48;
    }
}
