<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/19
 * Time: 14:48
 */

namespace Tests\Creational\AbstractFactoryTest;

use Creational\AbstractFactory\AbstractFactory;
use Creational\AbstractFactory\HtmlFactory;
use Creational\AbstractFactory\JsonFactory;

class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function getFactories()
    {
        return array(
            array(new JsonFactory()),
            array(new HtmlFactory())
        );
    }

    /**
     * 这里是工厂的客户端，我们无需关心传递过来的是什么工厂类，
     * 只需以我们想要的方式渲染任意想要的组件即可。
     *
     * @dataProvider getFactories
     */
    public function testComponentCreation(AbstractFactory $factory)
    {
        $article = array(
            $factory->createText('Laravel学院'),
            $factory->createPicture('/image.jpg', 'laravel-academy'),
            $factory->createText('LaravelAcademy.org')
        );

        /**
         * assertContainsOnly(string $type, Iterator|array $haystack[, boolean $isNativeType = NULL, string $message = ''])
         * $haystack 并非仅包含类型为 $type 的变量时报告错误，错误讯息由 $message 指定。
         * $isNativeType 是一个标志，用来表明 $type 是否是原生 PHP 类型。
         */
        $this->assertContainsOnly('Creational\AbstractFactory\MediaInterface', $article);
    }
}
