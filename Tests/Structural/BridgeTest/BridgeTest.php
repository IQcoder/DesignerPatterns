<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/27
 * Time: 15:02
 */

namespace Tests\Structural\BridgeTest;

use Structural\Bridge\Car;
use Structural\Bridge\Motorcycle;
use Structural\Bridge\Produce;
use Structural\Bridge\Assemble;

class BridgeTest extends \PHPUnit_Framework_TestCase
{
    public function testCar()
    {
        $vehicle = new Car(new Produce(), new Assemble());
        $this->expectOutputString('Car Produced Assembled');
        $vehicle->manufacture();
    }

    public function testMotorcycle()
    {
        $vehicle = new Motorcycle(new Produce(), new Assemble());
        $this->expectOutputString('Motorcycle Produced Assembled');
        $vehicle->manufacture();
    }
}
