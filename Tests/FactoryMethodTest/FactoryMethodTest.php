<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/19
 * Time: 16:49
 */

namespace Tests\FactoryMethodTest;

use DesignerPatterns\FactoryMethod\FactoryMethod;
use DesignerPatterns\FactoryMethod\GermanFactory;
use DesignerPatterns\FactoryMethod\ItalianFactory;

class FactoryMethodTest extends \PHPUnit_Framework_TestCase
{
    protected $type = array(
        FactoryMethod::CHEAP,
        FactoryMethod::FAST
    );

    public function getShop()
    {
        return array(
            array(new GermanFactory()),
            array(new ItalianFactory())
        );
    }

    /**
     * @dataProvider getShop
     */
    public function testCreation(FactoryMethod $shop)
    {
        // 该方法扮演客户端角色，我们不关心什么工厂，我们只知道可以可以用它来造车
        foreach ($this->type as $oneType) {
            $vehicle = $shop->create($oneType);
            /**
             * assertInstanceOf($expected, $actual[, $message = ''])
             * $actual 不是 $expected 的实例时报告错误，错误讯息由 $message 指定。
             */
            $this->assertInstanceOf('DesignerPatterns\FactoryMethod\VehicleInterface', $vehicle);
        }
    }

    /**
     * @dataProvider getShop
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage spaceship is not a valid vehicle
     */
    public function testUnknownType(FactoryMethod $shop)
    {
        $shop->create('spaceship');
    }
}
