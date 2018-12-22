<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/19
 * Time: 14:46
 */

namespace Creational\AbstractFactory\Json;


use Creational\AbstractFactory\BaseText;

class Text extends BaseText
{
    /**
     * 以 JSON 格式输出的渲染
     *
     * @return string
     */
    public function render()
    {
        return json_encode(array('content' => $this->text));
    }
}