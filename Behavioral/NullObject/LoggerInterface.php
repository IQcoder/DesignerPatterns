<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/28
 * Time: 11:10
 */

namespace Behavioral\NullObject;

/**
 * LoggerInterface 是 logger 接口
 *
 * 核心特性: NullLogger必须和其它Logger一样实现这个接口
 */
interface LoggerInterface
{
    /**
     * @param string $str
     *
     * @return mixed
     */
    public function log($str);
}
