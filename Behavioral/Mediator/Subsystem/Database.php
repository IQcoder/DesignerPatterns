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
 * Database提供数据库服务
 */
class Database extends Colleague
{
    /**
     * @return string
     */
    public function getData()
    {
        return "World";
    }
}