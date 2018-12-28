<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/28
 * Time: 9:38
 */

namespace Tests\Structural\FacadeTest;

use Structural\Facade\OsInterface;
use Structural\Facade\Facade as Computer;

class FacadeTest extends \PHPUnit_Framework_TestCase
{
    public function getComputer()
    {
        $bios = $this->getMockBuilder('Structural\Facade\BiosInterface')
            ->setMethods(array('launch', 'execute', 'waitForKeyPress'))
            ->disableAutoload()
            ->getMock();
        $os = $this->getMockBuilder('Structural\Facade\OsInterface')
            ->setMethods(array('getName'))
            ->disableAutoload()
            ->getMock();
        $bios->expects($this->once())
            ->method('launch')
            ->with($os);
        $os->expects($this->once())
            ->method('getName')
            ->will($this->returnValue('Linux'));

        $facade = new Computer($bios, $os);
        return array(array($facade, $os));
    }

    /**
     * @dataProvider getComputer
     */
    public function testComputerOn(Computer $facade, OsInterface $os)
    {
        // interface is simpler :
        $facade->turnOn();
        // but I can access to lower component
        $this->assertEquals('Linux', $os->getName());
    }
}
