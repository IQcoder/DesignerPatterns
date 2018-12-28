<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/28
 * Time: 10:53
 */

namespace Behavioral\Mediator\Subsystem;

use Behavioral\Mediator\Colleague;
/**
 * Server用于发送响应
 */
class Server extends Colleague
{
    /**
     * process on server
     */
    public function process()
    {
        $data = $this->getMediator()->queryDb();
        $this->getMediator()->sendResponse("Hello $data");
    }
}