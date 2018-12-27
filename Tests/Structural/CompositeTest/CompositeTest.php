<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/27
 * Time: 15:33
 */

namespace Tests\Structural\CompositeTest;

use Structural\Composite\Form;
use Structural\Composite\TextElement;
use Structural\Composite\InputElement;

class CompositeTest extends \PHPUnit_Framework_TestCase
{
    public function testRender()
    {
        $form = new Form();
        $form->addElement(new TextElement());
        $form->addElement(new InputElement());
        $embed = new Form();
        $embed->addElement(new TextElement());
        $embed->addElement(new InputElement());
        $form->addElement($embed);  // 这里我们添加一个嵌套树到表单

        $this->assertRegExp('#^\s{4}#m', $form->render());
    }

    /**
     * 组合模式最关键之处在于如果你想要构建组件树每个组件必须实现组件接口
     */
    public function testFormImplementsFormEelement()
    {
        $className = 'Structural\Composite\Form';
        $abstractName = 'Structural\Composite\FormElement';
        $this->assertTrue(is_subclass_of($className, $abstractName));
    }
}
