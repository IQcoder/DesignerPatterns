<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/19
 * Time: 14:42
 */

namespace DesignerPatterns\Factory;

/**
 * MediaInterface接口
 *
 * 该接口不是抽象工厂设计模式的一部分, 一般情况下, 每个组件都是不相干的
 */

interface MediaInterface
{
    /**
     * JSON 或 HTML（取决于具体类）输出的未经处理的渲染
     *
     * @return string
     */
    public function render();
}