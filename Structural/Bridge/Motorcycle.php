<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/27
 * Time: 15:01
 */

namespace Structural\Bridge;

/**
 * 经过改良的抽象实现：Motorcycle
 */
class Motorcycle extends Vehicle
{

    public function __construct(Workshop $workShop1, Workshop $workShop2)
    {
        parent::__construct($workShop1, $workShop2);
    }

    public function manufacture()
    {
        print 'Motorcycle ';
        $this->workShop1->work();
        $this->workShop2->work();
    }
}