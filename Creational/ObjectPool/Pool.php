<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/19
 * Time: 17:22
 */

namespace Creational\ObjectPool;


class Pool
{
    private $instances = array();
    private $class;

    public function __construct($class)
    {
        $this->class = $class;
    }

    public function get()
    {
        if (count($this->instances) > 0) {
            return array_pop($this->instances);
        }

        return new $this->class();
    }

    public function dispose($instance)
    {
        $this->instances[] = $instance;
    }
}