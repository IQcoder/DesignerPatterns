<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/19
 * Time: 16:46
 */

namespace DesignerPatterns\FactoryMethod;

/**
 * VehicleInterface是车辆接口
 */
interface VehicleInterface
{
    /**
     * 设置车的颜色
     *
     * @param string $rgb
     */
    public function setColor($rgb);
}