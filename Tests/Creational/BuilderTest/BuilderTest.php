<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/19
 * Time: 15:22
 */

namespace Tests\Creational\BuilderTest;

use Creational\Builder\Director;
use Creational\Builder\BuilderInterface;
use Creational\Builder\CarBuilder;
use Creational\Builder\BikeBuilder;

class BuilderTest extends \PHPUnit_Framework_TestCase
{
    protected $director;

    protected function setUp()
    {
        $this->director = new Director();
    }

    public function getBuilder()
    {
        return array(
            array(new CarBuilder()),
            array(new BikeBuilder())
        );
    }

    /**
     * 这里我们测试建造过程，客户端并不知道具体的建造者。
     *
     * @dataProvider getBuilder
     */
    public function testBuild(BuilderInterface $builder)
    {
        $newVehicle = $this->director->build($builder);
        /**
         * assertInstanceOf($expected, $actual[, $message = ''])
         * $actual 不是 $expected 的实例时报告错误，错误讯息由 $message 指定。
         */
        $this->assertInstanceOf('Creational\Builder\Parts\Vehicle', $newVehicle);
    }
}
