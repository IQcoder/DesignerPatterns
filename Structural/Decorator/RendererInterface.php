<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/27
 * Time: 17:14
 */

namespace Structural\Decorator;

/**
 * RendererInterface接口
 */
interface RendererInterface
{
    /**
     * render data
     *
     * @return mixed
     */
    public function renderData();
}