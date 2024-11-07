<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder9ab31 = null;
    private $initializer621a1 = null;
    private static $publicProperties00e9a = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'getList', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'getInstalledModules', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'getMustBeConfiguredModules', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'getUpgradableModules', array(), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'setActionUrls', array('collection' => $collection), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        return $this->valueHolder9ab31->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer621a1 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder9ab31) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder9ab31 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder9ab31->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer621a1 && ($this->initializer621a1->__invoke($valueHolder9ab31, $this, '__get', ['name' => $name], $this->initializer621a1) || 1) && $this->valueHolder9ab31 = $valueHolder9ab31;
        if (isset(self::$publicProperties00e9a[$name])) {
            return $this->valueHolder9ab31->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
