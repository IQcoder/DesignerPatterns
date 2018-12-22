<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/19
 * Time: 14:44
 */

namespace Creational\AbstractFactory\Json;

use Creational\AbstractFactory\BasePicture;

/**
 * Picture类
 *
 * 该类是以 JSON 格式输出的具体图片组件类
 */
class Picture extends BasePicture
{
    /**
     * JSON 格式输出
     *
     * @return string
     */
    public function render()
    {
        return json_encode(array('title' => $this->name, 'path' => $this->path));
    }
}