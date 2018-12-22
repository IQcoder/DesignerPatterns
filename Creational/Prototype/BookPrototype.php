<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/20
 * Time: 16:27
 */

namespace Creational\Prototype;

/**
 * 抽象BookPrototype类
 */
abstract class BookPrototype
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $category;

    /**
     * @abstract
     * @return void
     */
    abstract public function __clone();

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}