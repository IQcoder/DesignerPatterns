<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/27
 * Time: 15:00
 */

namespace Structural\Bridge;

/**
 * 具体实现：Assemble
 */
class Assemble implements Workshop
{

    public function work()
    {
        print 'Assembled';
    }
}
