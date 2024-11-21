<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderdba48 = null;
    private $initializerc45f0 = null;
    private static $publicPropertiesdd96b = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'getList', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;
        return $this->valueHolderdba48->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'getInstalledModules', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;
        return $this->valueHolderdba48->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'getMustBeConfiguredModules', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;
        return $this->valueHolderdba48->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'getUpgradableModules', array(), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;
        return $this->valueHolderdba48->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;
        return $this->valueHolderdba48->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;
        return $this->valueHolderdba48->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'setActionUrls', array('collection' => $collection), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;
        return $this->valueHolderdba48->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;
        return $this->valueHolderdba48->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerc45f0 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolderdba48) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderdba48 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolderdba48->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerc45f0 && ($this->initializerc45f0->__invoke($valueHolderdba48, $this, '__get', ['name' => $name], $this->initializerc45f0) || 1) && $this->valueHolderdba48 = $valueHolderdba48;
        if (isset(self::$publicPropertiesdd96b[$name])) {
            return $this->valueHolderdba48->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
