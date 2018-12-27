<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/27
 * Time: 17:15
 */

namespace Structural\Decorator;

/**
 * RenderInJson类
 */
class RenderInJson extends Decorator
{
    /**
     * render data as JSON
     *
     * @return mixed|string
     */
    public function renderData()
    {
        $output = $this->wrapped->renderData();

        return json_encode($output);
    }
}