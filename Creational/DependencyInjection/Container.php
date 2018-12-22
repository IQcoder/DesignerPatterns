<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/19
 * Time: 13:47
 */

namespace Creational\DependencyInjection;

use Closure;

use ReflectionClass;
use ReflectionParameter;

class Container
{
    /**
     * 容器绑定，用来装提供的实例或提供实例的回调函数
     * @var array
     */
    public $building = [];

    /**
     * 注册一个绑定到容器
     * @param $abstract
     * @param null $concrete
     * @param bool $shared
     */
    public function bind($abstract,$concrete=null,$shared=false)
    {
        if (is_null($concrete)) {
            $concrete = $abstract;
        }

        if (!$concrete instanceof Closure) {
            $concrete = $this->getClosure($abstract,$concrete);
        }
        $this->building[$abstract] = compact("concrete","shared");
    }

    /**
     * 注册一个共享的绑定 单例
     * @param $abstract
     * @param $concrete
     * @param bool $shared
     */
    public function singleton($abstract,$concrete,$shared=true)
    {
        $this->bind($abstract,$concrete,$shared);
    }

    /**
     * 默认生成回调实例闭包
     * @param $abstract
     * @param $concrete
     * @return Closure
     */
    public function getClosure($abstract,$concrete)
    {
        return function ($c) use ($abstract,$concrete) {
            $method = ($abstract == $concrete) ? 'build' : 'make';
            return $c->$method($concrete);
        };
    }

    /**
     * 生成实例
     * @param $abstract
     * @return mixed|object
     * @throws \ReflectionException
     */
    public function make($abstract)
    {
        $concrete = $this->getConcrete($abstract);
        if ($this->isBuildable($concrete,$abstract)) {
            $object = $this->build($concrete);
        } else {
            $object = $this->make($concrete);
        }
        return $object;
    }

    /**
     * 获取绑定的回调函数
     * @param $abstract
     * @return mixed
     */
    public function getConcrete($abstract)
    {
        if (!$this->building[$abstract]) {
            return $abstract;
        }
        return $this->building[$abstract]['concrete'];
    }

    /**
     * 判断是否可以创建服务实体
     * @param $concrete
     * @param $abstract
     * @return bool
     */
    public function isBuildable($concrete,$abstract)
    {
        return $concrete === $abstract || $concrete instanceof Closure;
    }

    /**
     * 根据实例具体名称实例具体对象
     * @param $concrete
     * @return mixed|object
     * @throws \ReflectionException
     */
    public function build($concrete)
    {
        if ($concrete instanceof Closure) {
            return $concrete($this);
        }

        $reflector = new ReflectionClass($concrete);
        if ($reflector->isInstantiable()) {
            throw new \Exception('无法创建实例');
        }

        $constructor = $reflector->getConstructor();
        if (is_null($constructor)) {
            return new $concrete;
        }

        $dependencies = $constructor->getParameters();
        $instance = $this->getDependencies($dependencies);
        return $reflector->newInstanceArgs($instance);


    }

    /**
     * 通过反射解决参数依赖
     * @param array $dependencies
     * @return array
     * @throws \ReflectionException
     */
    public function getDependencies(array $dependencies)
    {
        $results = [];
        foreach ($dependencies as $dependency) {
            $results[] = is_null($dependency->getClass())
                ? $this->resolvedNonClass($dependency)
                : $this->resolvedClass($dependency);
        }
        return $results;
    }

    /**
     * 解决一个没有类型的提示依赖
     * @param ReflectionParameter $parameter
     * @return mixed
     * @throws \ReflectionException
     */
    public function resolvedNonClass(ReflectionParameter $parameter)
    {
        if ($parameter->isDefaultValueAvailable()) {
            return $parameter->getDefaultValue();
        }
        throw new \Exception('出错');
    }

    /**
     * 通过容器解决依赖
     * @param ReflectionParameter $parameter
     * @return mixed|object
     * @throws \ReflectionException
     */
    public function resolvedClass(ReflectionParameter $parameter)
    {
        return $this->make($parameter->getClass()->name);
    }
}