<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/27
 * Time: 15:00
 */

namespace Structural\Bridge;

/**
 * 具体实现：Produce
 */
class Produce implements Workshop
{

    public function work()
    {
        print 'Produced ';
    }
}