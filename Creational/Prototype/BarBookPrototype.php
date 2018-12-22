<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/20
 * Time: 16:27
 */

namespace Creational\Prototype;

/**
 * BarBookPrototype类
 */
class BarBookPrototype extends BookPrototype
{
    /**
     * @var string
     */
    protected $category = 'Bar';

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