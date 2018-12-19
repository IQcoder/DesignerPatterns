<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/19
 * Time: 14:47
 */

namespace DesignerPatterns\Factory\Html;


use DesignerPatterns\Factory\BasePicture;

class Picture extends BasePicture
{
    /**
     * HTML 格式输出的图片
     *
     * @return string
     */
    public function render()
    {
        return sprintf('<images src="%s" title="%s"/>', $this->path, $this->name);
    }
}