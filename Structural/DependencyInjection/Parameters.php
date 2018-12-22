<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/19
 * Time: 14:11
 */

namespace Structural\DependencyInjection;


interface Parameters
{
    /**
     * 获取参数
     *
     * @param string|int $key
     *
     * @return mixed
     */
    public function get($key);

    /**
     * 设置参数
     *
     * @param string|int $key
     * @param mixed      $value
     */
    public function set($key, $value);
}