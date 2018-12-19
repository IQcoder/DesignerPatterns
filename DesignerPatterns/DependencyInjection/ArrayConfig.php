<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/19
 * Time: 14:12
 */

namespace DesignerPatterns\DependencyInjection;


class ArrayConfig extends AbstractConfig implements Parameters
{

    /**
     * 获取参数
     *
     * @param string|int $key
     * @param null $default
     * @return mixed
     */
    public function get($key, $default = null)
    {
        if (isset($this->storage[$key])) {
            return $this->storage[$key];
        }
        return $default;
    }

    /**
     * 设置参数
     *
     * @param string|int $key
     * @param mixed $value
     */
    public function set($key, $value)
    {
        $this->storage[$key] = $value;
    }
}