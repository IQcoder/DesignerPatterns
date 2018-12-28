<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/28
 * Time: 11:12
 */

namespace Tests\Behavioral\NullObjectTest;

use Behavioral\NullObject\NullLogger;
use Behavioral\NullObject\PrintLogger;
use Behavioral\NullObject\Service;


class NullObjectTest extends \PHPUnit_Framework_TestCase
{
    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString(null);  // 没有输出
        $service->doSomething();
    }

    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('We are in Behavioral\NullObject\Service::doSomething');
        $service->doSomething();
    }
}
