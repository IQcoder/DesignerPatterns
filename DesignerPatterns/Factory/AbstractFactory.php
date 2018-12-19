<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/19
 * Time: 11:49
 */

namespace DesignerPatterns\Factory;


abstract class AbstractFactory
{
    /**
     * 创建本文组件
     *
     * @param string $content
     *
     * @return BaseText
     */
    abstract public function createText($content);

    /**
     * 创建图片组件
     *
     * @param string $path
     * @param string $name
     *
     * @return BasePicture
     */
    abstract public function createPicture($path, $name = '');
}