<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/27
 * Time: 14:26
 */

namespace Tests\Creational\SingletonTest;

use Creational\Singleton\Singleton;

class SingletonTest extends \PHPUnit_Framework_TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $this->assertInstanceOf(Singleton::class, $firstCall);
        $secondCall = Singleton::getInstance();
        $this->assertSame($firstCall, $secondCall);
    }

    public function testNoConstructor()
    {
        $obj = Singleton::getInstance();

        $refl = new \ReflectionObject($obj);
        $meth = $refl->getMethod('__construct');
        $this->assertTrue($meth->isPrivate());
    }
}
