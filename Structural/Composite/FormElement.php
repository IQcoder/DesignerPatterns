<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/27
 * Time: 15:32
 */

namespace Structural\Composite;

/**
 * FormElement类
 */
abstract class FormElement
{
    /**
     * renders the elements' code
     *
     * @param int $indent
     *
     * @return mixed
     */
    abstract public function render($indent = 0);
}