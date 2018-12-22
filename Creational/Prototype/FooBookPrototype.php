<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/20
 * Time: 16:28
 */

namespace Creational\Prototype;

/**
 * FooBookPrototype类
 */
class FooBookPrototype extends BookPrototype
{
    protected $category = 'Foo';

    /**
     * empty clone
     */
    public function __clone()
    {
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }
}