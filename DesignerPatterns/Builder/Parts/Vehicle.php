<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/19
 * Time: 15:27
 */

namespace DesignerPatterns\Builder\Parts;


abstract class Vehicle
{
    /**
     * @var array
     */
    protected $data;

    /**
     * @param string $key
     * @param mixed $value
     */
    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}