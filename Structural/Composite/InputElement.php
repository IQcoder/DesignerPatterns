<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/27
 * Time: 15:33
 */

namespace Structural\Composite;


/**
 * InputElement类
 */
class InputElement extends FormElement
{
    /**
     * 渲染input元素HTML
     *
     * @param int $indent
     *
     * @return mixed|string
     */
    public function render($indent = 0)
    {
        return str_repeat('  ', $indent) . '<input type="text" />';
    }
}