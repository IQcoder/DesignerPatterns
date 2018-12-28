<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/28
 * Time: 11:36
 */

namespace Behavioral\TemplateMethod;


/**
 * CityJourney类（在城市中度假）
 */
class CityJourney extends Journey
{
    protected function enjoyVacation()
    {
        echo "Eat, drink, take photos and sleep\n";
    }
}