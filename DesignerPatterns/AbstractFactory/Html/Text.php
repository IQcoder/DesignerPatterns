<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/19
 * Time: 14:47
 */

namespace DesignerPatterns\AbstractFactory\Html;


use DesignerPatterns\AbstractFactory\BaseText;

class Text extends BaseText
{
    /**
     * HTML 格式输出的文本
     *
     * @return string
     */
    public function render()
    {
        return '<div>' . htmlspecialchars($this->text) . '</div>';
    }
}