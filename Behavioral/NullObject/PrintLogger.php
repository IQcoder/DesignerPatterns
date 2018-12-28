<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/28
 * Time: 11:10
 */

namespace Behavioral\NullObject;

/**
 * PrintLogger是用于打印Logger实体到标准输出的Logger
 */
class PrintLogger implements LoggerInterface
{
    /**
     * @param string $str
     */
    public function log($str)
    {
        echo $str;
    }
}