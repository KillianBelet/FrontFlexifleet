<?php

namespace ContainerLSDx0Is;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder85726 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8f445 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc588b = [
        
    ];

    public function getConnection()
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'getConnection', array(), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'getMetadataFactory', array(), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'getExpressionBuilder', array(), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'beginTransaction', array(), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'getCache', array(), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'transactional', array('func' => $func), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'commit', array(), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->commit();
    }

    public function rollback()
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'rollback', array(), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'getClassMetadata', array('className' => $className), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'createQuery', array('dql' => $dql), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'createNamedQuery', array('name' => $name), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'createQueryBuilder', array(), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'flush', array('entity' => $entity), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'clear', array('entityName' => $entityName), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->clear($entityName);
    }

    public function close()
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'close', array(), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->close();
    }

    public function persist($entity)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'persist', array('entity' => $entity), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'remove', array('entity' => $entity), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'refresh', array('entity' => $entity), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'detach', array('entity' => $entity), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'merge', array('entity' => $entity), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'contains', array('entity' => $entity), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'getEventManager', array(), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'getConfiguration', array(), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'isOpen', array(), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'getUnitOfWork', array(), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'getProxyFactory', array(), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'initializeObject', array('obj' => $obj), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'getFilters', array(), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'isFiltersStateClean', array(), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'hasFilters', array(), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return $this->valueHolder85726->hasFilters();
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

        $instance->initializer8f445 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder85726) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder85726 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder85726->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, '__get', ['name' => $name], $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        if (isset(self::$publicPropertiesc588b[$name])) {
            return $this->valueHolder85726->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85726;

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

        $targetObject = $this->valueHolder85726;
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
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85726;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder85726;
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
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, '__isset', array('name' => $name), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85726;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder85726;
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
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, '__unset', array('name' => $name), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85726;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder85726;
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
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, '__clone', array(), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        $this->valueHolder85726 = clone $this->valueHolder85726;
    }

    public function __sleep()
    {
        $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, '__sleep', array(), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;

        return array('valueHolder85726');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8f445 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8f445;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8f445 && ($this->initializer8f445->__invoke($valueHolder85726, $this, 'initializeProxy', array(), $this->initializer8f445) || 1) && $this->valueHolder85726 = $valueHolder85726;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder85726;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder85726;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
