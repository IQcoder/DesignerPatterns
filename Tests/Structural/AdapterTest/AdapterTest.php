<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/27
 * Time: 14:50
 */

namespace Tests\Structural\AdapterTest;

use Structural\Adapter\EBookAdapter;
use Structural\Adapter\Kindle;
use Structural\Adapter\PaperBookInterface;
use Structural\Adapter\Book;

class AdapterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return array
     */
    public function getBook()
    {
        return array(
            array(new Book()),
            // 我们在适配器中引入了电子书
            array(new EBookAdapter(new Kindle()))
        );
    }

    /**
     * 客户端只知道有纸质书，实际上第二本书是电子书，
     * 但是对客户来说代码一致，不需要做任何改动
     *
     * @param PaperBookInterface $book
     *
     * @dataProvider getBook
     */
    public function testIAmAnOldClient(PaperBookInterface $book)
    {
        $this->assertTrue(method_exists($book, 'open'));
        $this->assertTrue(method_exists($book, 'turnPage'));
    }
}
