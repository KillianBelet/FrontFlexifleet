<?php

namespace ContainerInxUfVR;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder90a04 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer13db0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1f4cc = [
        
    ];

    public function getConnection()
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'getConnection', array(), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'getMetadataFactory', array(), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'getExpressionBuilder', array(), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'beginTransaction', array(), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'getCache', array(), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->getCache();
    }

    public function transactional($func)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'transactional', array('func' => $func), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'wrapInTransaction', array('func' => $func), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'commit', array(), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->commit();
    }

    public function rollback()
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'rollback', array(), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'getClassMetadata', array('className' => $className), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'createQuery', array('dql' => $dql), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'createNamedQuery', array('name' => $name), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'createQueryBuilder', array(), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'flush', array('entity' => $entity), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'clear', array('entityName' => $entityName), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->clear($entityName);
    }

    public function close()
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'close', array(), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->close();
    }

    public function persist($entity)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'persist', array('entity' => $entity), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'remove', array('entity' => $entity), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'refresh', array('entity' => $entity), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'detach', array('entity' => $entity), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'merge', array('entity' => $entity), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'getRepository', array('entityName' => $entityName), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'contains', array('entity' => $entity), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'getEventManager', array(), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'getConfiguration', array(), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'isOpen', array(), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'getUnitOfWork', array(), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'getProxyFactory', array(), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'initializeObject', array('obj' => $obj), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'getFilters', array(), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'isFiltersStateClean', array(), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'hasFilters', array(), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return $this->valueHolder90a04->hasFilters();
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

        $instance->initializer13db0 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder90a04) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder90a04 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder90a04->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, '__get', ['name' => $name], $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        if (isset(self::$publicProperties1f4cc[$name])) {
            return $this->valueHolder90a04->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder90a04;

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

        $targetObject = $this->valueHolder90a04;
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
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder90a04;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder90a04;
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
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, '__isset', array('name' => $name), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder90a04;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder90a04;
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
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, '__unset', array('name' => $name), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder90a04;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder90a04;
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
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, '__clone', array(), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        $this->valueHolder90a04 = clone $this->valueHolder90a04;
    }

    public function __sleep()
    {
        $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, '__sleep', array(), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;

        return array('valueHolder90a04');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer13db0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer13db0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer13db0 && ($this->initializer13db0->__invoke($valueHolder90a04, $this, 'initializeProxy', array(), $this->initializer13db0) || 1) && $this->valueHolder90a04 = $valueHolder90a04;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder90a04;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder90a04;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
