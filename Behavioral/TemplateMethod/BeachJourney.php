<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/28
 * Time: 11:36
 */

namespace Behavioral\TemplateMethod;


/**
 * BeachJourney类（在海滩度假）
 */
class BeachJourney extends Journey
{
    protected function enjoyVacation()
    {
        echo "Swimming and sun-bathing\n";
    }
}