<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/28
 * Time: 9:58
 */

namespace Tests\Structural\ProxyTest;

use Structural\Proxy\RecordProxy;

class ProxyTest extends \PHPUnit_Framework_TestCase
{
    public function testSetAttribute(){
        $data = [];
        $proxy = new RecordProxy($data);
        $proxy->xyz = false;
        $this->assertTrue($proxy->xyz===false);
    }
}
