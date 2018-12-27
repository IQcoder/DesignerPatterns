<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/27
 * Time: 15:33
 */

namespace Structural\Composite;


/**
 * TextElement类
 */
class TextElement extends FormElement
{
    /**
     * 渲染文本元素
     *
     * @param int $indent
     *
     * @return mixed|string
     */
    public function render($indent = 0)
    {
        return str_repeat('  ', $indent) . 'this is a text element';
    }
}