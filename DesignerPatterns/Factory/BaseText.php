<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/19
 * Time: 14:43
 */

namespace DesignerPatterns\Factory;


abstract class BaseText implements MediaInterface
{
    /**
     * @var string
     */
    protected $text;

    /**
     * @param string $text
     */
    public function __construct($text)
    {
        $this->text = (string) $text;
    }
}