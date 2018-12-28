<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/28
 * Time: 10:52
 */

namespace Behavioral\Mediator;

/**
 * Mediator是中介者模式的具体实现类
 * In this example, I have made a "Hello World" with the Mediator Pattern.
 */
class Mediator implements MediatorInterface
{

    /**
     * @var Subsystem\Server
     */
    protected $server;

    /**
     * @var Subsystem\Database
     */
    protected $database;

    /**
     * @var Subsystem\Client
     */
    protected $client;

    /**
     * @param Subsystem\Database $db
     * @param Subsystem\Client   $cl
     * @param Subsystem\Server   $srv
     */
    public function setColleague(Subsystem\Database $db, Subsystem\Client $cl, Subsystem\Server $srv)
    {
        $this->database = $db;
        $this->server = $srv;
        $this->client = $cl;
    }

    /**
     * 发起请求
     */
    public function makeRequest()
    {
        $this->server->process();
    }

    /**
     * 查询数据库
     * @return mixed
     */
    public function queryDb()
    {
        return $this->database->getData();
    }

    /**
     * 发送响应
     *
     * @param string $content
     */
    public function sendResponse($content)
    {
        $this->client->output($content);
    }
}