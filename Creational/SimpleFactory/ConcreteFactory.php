<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/20
 * Time: 16:37
 */

namespace Creational\SimpleFactory;

/**
 * ConcreteFactory类
 */
class ConcreteFactory
{
    /**
     * @var array
     */
    protected $typeList;

    /**
     * 你可以在这里注入自己的车子类型
     */
    public function __construct()
    {
        $this->typeList = array(
            'bicycle' => __NAMESPACE__ . '\Bicycle',
            'other' => __NAMESPACE__ . '\Scooter'
        );
    }

    /**
     * 创建车子
     *
     * @param string $type a known type key
     *
     * @return VehicleInterface a new instance of VehicleInterface
     * @throws \InvalidArgumentException
     */
    public function createVehicle($type)
    {
        if (!array_key_exists($type, $this->typeList)) {
            throw new \InvalidArgumentException("$type is not valid vehicle");
        }
        $className = $this->typeList[$type];

        return new $className();
    }
}