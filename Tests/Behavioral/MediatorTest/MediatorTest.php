<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/28
 * Time: 10:54
 */

namespace Tests\Behavioral\MediatorTest;

use Behavioral\Mediator\Mediator;
use Behavioral\Mediator\Subsystem\Client;
use Behavioral\Mediator\Subsystem\Database;
use Behavioral\Mediator\Subsystem\Server;

class MediatorTest extends \PHPUnit_Framework_TestCase
{
    protected $client;

    protected function setUp()
    {
        $media = new Mediator();
        $this->client = new Client($media);
        $media->setColleague(new Database($media), $this->client, new Server($media));
    }

    public function testOutputHelloWorld()
    {
        // 测试是否输出 Hello World :
        $this->expectOutputString('Hello World');
        // 正如你所看到的, Client, Server 和 Database 是完全解耦的
        $this->client->request();
    }
}
