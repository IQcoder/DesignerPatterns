<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/20
 * Time: 16:37
 */

namespace Creational\SimpleFactory;

/**
 * VehicleInterface 是车子接口
 */
interface VehicleInterface
{
    /**
     * @param mixed $destination
     *
     * @return mixed
     */
    public function driveTo($destination);
}