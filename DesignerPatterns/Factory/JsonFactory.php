<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/19
 * Time: 14:40
 */

namespace DesignerPatterns\Factory;


class JsonFactory extends AbstractFactory
{
    /**
     * 创建图片组件
     *
     * @param string $path
     * @param string $name
     *
     * @return Json\Picture|BasePicture
     */
    public function createPicture($path, $name = '')
    {
        return new Json\Picture($path, $name);
    }

    /**
     * 创建文本组件
     *
     * @param string $content
     *
     * @return Json\Text|BaseText
     */
    public function createText($content)
    {
        return new Json\Text($content);
    }
}