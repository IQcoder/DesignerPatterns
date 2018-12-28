<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/28
 * Time: 11:21
 */

namespace Behavioral\Specification;

class Item
{
    protected $price;

    /**
     * An item must have a price
     *
     * @param int $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    /**
     * Get the items price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }
}