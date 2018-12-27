<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/27
 * Time: 14:50
 */

namespace Structural\Adapter;

/**
 * Kindle 是电子书实现类
 */
class Kindle implements EBookInterface
{
    /**
     * {@inheritdoc}
     */
    public function pressNext()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function pressStart()
    {
    }
}