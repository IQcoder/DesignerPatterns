<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/27
 * Time: 14:48
 */

namespace Structural\Adapter;

/**
 * Book 是纸质书实现类
 */
class Book implements PaperBookInterface
{
    /**
     * {@inheritdoc}
     */
    public function open()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function turnPage()
    {
    }
}