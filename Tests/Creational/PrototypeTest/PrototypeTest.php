<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/20
 * Time: 16:29
 */

namespace Tests\Creational\PrototypeTest;

use Creational\Prototype\BookPrototype;
use Creational\Prototype\BarBookPrototype;
use Creational\Prototype\FooBookPrototype;

class PrototypeTest extends \PHPUnit_Framework_TestCase
{
    public function getPrototype(){
        return array(
            array(new FooBookPrototype()),
            array(new BarBookPrototype())
        );
    }

    /**
     * @dataProvider getPrototype
     */
    public function testCreation(BookPrototype $prototype)
    {
        $book = clone $prototype;
        $book->setTitle($book->getCategory().' Book');
        $this->assertInstanceOf('Creational\Prototype\BookPrototype', $book);
    }
}
