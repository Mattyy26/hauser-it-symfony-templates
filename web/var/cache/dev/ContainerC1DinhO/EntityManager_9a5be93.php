<?php

namespace ContainerC1DinhO;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6ced5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer03754 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc38b0 = [
        
    ];

    public function getConnection()
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'getConnection', array(), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'getMetadataFactory', array(), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'getExpressionBuilder', array(), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'beginTransaction', array(), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'getCache', array(), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->getCache();
    }

    public function transactional($func)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'transactional', array('func' => $func), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'wrapInTransaction', array('func' => $func), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'commit', array(), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->commit();
    }

    public function rollback()
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'rollback', array(), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'getClassMetadata', array('className' => $className), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'createQuery', array('dql' => $dql), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'createNamedQuery', array('name' => $name), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'createQueryBuilder', array(), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'flush', array('entity' => $entity), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'clear', array('entityName' => $entityName), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->clear($entityName);
    }

    public function close()
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'close', array(), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->close();
    }

    public function persist($entity)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'persist', array('entity' => $entity), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'remove', array('entity' => $entity), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'refresh', array('entity' => $entity), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'detach', array('entity' => $entity), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'merge', array('entity' => $entity), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'getRepository', array('entityName' => $entityName), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'contains', array('entity' => $entity), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'getEventManager', array(), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'getConfiguration', array(), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'isOpen', array(), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'getUnitOfWork', array(), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'getProxyFactory', array(), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'initializeObject', array('obj' => $obj), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'getFilters', array(), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'isFiltersStateClean', array(), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'hasFilters', array(), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return $this->valueHolder6ced5->hasFilters();
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

        $instance->initializer03754 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6ced5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6ced5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6ced5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, '__get', ['name' => $name], $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        if (isset(self::$publicPropertiesc38b0[$name])) {
            return $this->valueHolder6ced5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6ced5;

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

        $targetObject = $this->valueHolder6ced5;
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
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6ced5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6ced5;
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
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, '__isset', array('name' => $name), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6ced5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6ced5;
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
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, '__unset', array('name' => $name), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6ced5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6ced5;
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
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, '__clone', array(), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        $this->valueHolder6ced5 = clone $this->valueHolder6ced5;
    }

    public function __sleep()
    {
        $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, '__sleep', array(), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;

        return array('valueHolder6ced5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer03754 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer03754;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer03754 && ($this->initializer03754->__invoke($valueHolder6ced5, $this, 'initializeProxy', array(), $this->initializer03754) || 1) && $this->valueHolder6ced5 = $valueHolder6ced5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6ced5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6ced5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
