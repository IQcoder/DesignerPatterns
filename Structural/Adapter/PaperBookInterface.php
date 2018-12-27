<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/27
 * Time: 14:48
 */

namespace Structural\Adapter;

/**
 * PaperBookInterface 是纸质书接口
 */
interface PaperBookInterface
{
    /**
     * 翻页方法
     *
     * @return mixed
     */
    public function turnPage();

    /**
     * 打开书的方法
     *
     * @return mixed
     */
    public function open();
}