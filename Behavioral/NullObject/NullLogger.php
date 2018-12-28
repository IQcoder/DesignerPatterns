<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/28
 * Time: 11:10
 */

namespace Behavioral\NullObject;

/**
 * 核心特性 : 必须实现LoggerInterface接口
 */
class NullLogger implements LoggerInterface
{
    /**
     * {@inheritdoc}
     */
    public function log($str)
    {
        // do nothing
    }
}