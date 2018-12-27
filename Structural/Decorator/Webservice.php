<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/27
 * Time: 17:14
 */

namespace Structural\Decorator;

/**
 * Webservice类
 */
class Webservice implements RendererInterface
{
    /**
     * @var mixed
     */
    protected $data;

    /**
     * @param mixed $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function renderData()
    {
        return $this->data;
    }
}