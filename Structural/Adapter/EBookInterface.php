<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/27
 * Time: 14:49
 */

namespace Structural\Adapter;

/**
 * EBookInterface 是电子书接口
 */
interface EBookInterface
{
    /**
     * 电子书翻页
     *
     * @return mixed
     */
    public function pressNext();

    /**
     * 打开电子书
     *
     * @return mixed
     */
    public function pressStart();
}