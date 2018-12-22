<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/19
 * Time: 17:23
 */

namespace Creational\ObjectPool;


class Worker
{
    public function __construct()
    {
        // let's say that constuctor does really expensive work...
        // for example creates "thread"
    }

    public function run($image, array $callback)
    {
        // do something with $image...
        // and when it's done, execute callback
        call_user_func($callback, $this);
    }
}