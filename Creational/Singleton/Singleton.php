<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/27
 * Time: 14:23
 */

namespace Creational\Singleton;

/**
 * Singleton类
 */
class Singleton
{
    /**
     * @var Singleton reference to singleton instance
     */
    private static $instance;

    /**
     * 通过延迟加载（用到时才加载）获取实例
     *
     * @return self
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    /**
     * 构造函数私有，不允许在外部实例化
     *
     */
    private function __construct()
    {
    }

    /**
     * 防止对象实例被克隆
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * 防止被反序列化
     *
     * @return void
     */
    private function __wakeup()
    {
    }
}