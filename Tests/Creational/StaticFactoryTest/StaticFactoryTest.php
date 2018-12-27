<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/27
 * Time: 14:37
 */

namespace Tests\Creational\StaticFactoryTest;

use Creational\StaticFactory\StaticFactory;

class StaticFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function getTypeList()
    {
        return array(
            array('string'),
            array('integer')
        );
    }

    /**
     * @dataProvider getTypeList
     */
    public function testCreation($type)
    {
        $obj = StaticFactory::factory($type);
        $this->assertInstanceOf('Creational\StaticFactory\FormatterInterface', $obj);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testException()
    {
        StaticFactory::factory("");
    }
}
