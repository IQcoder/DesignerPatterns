<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/19
 * Time: 14:41
 */

namespace Creational\AbstractFactory;


class HtmlFactory extends AbstractFactory
{
    /**
     * 创建图片组件
     *
     * @param string $path
     * @param string $name
     *
     * @return Html\Picture|BasePicture
     */
    public function createPicture($path, $name = '')
    {
        return new Html\Picture($path, $name);
    }

    /**
     * 创建文本组件
     *
     * @param string $content
     *
     * @return Html\Text|BaseText
     */
    public function createText($content)
    {
        return new Html\Text($content);
    }
}