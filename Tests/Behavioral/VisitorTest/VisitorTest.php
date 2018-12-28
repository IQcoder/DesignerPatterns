<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/28
 * Time: 11:42
 */

namespace Tests\Behavioral\VisitorTest;

use Behavioral\Visitor\User;
use Behavioral\Visitor\Group;
use Behavioral\Visitor\Role;
use Behavioral\Visitor\RolePrintVisitor;

class VisitorTest extends \PHPUnit_Framework_TestCase
{
    protected $visitor;

    protected function setUp()
    {
        $this->visitor = new RolePrintVisitor();
    }

    public function getRole()
    {
        return array(
            array(new User("Dominik"), 'Role: User Dominik'),
            array(new Group("Administrators"), 'Role: Group: Administrators')
        );
    }

    /**
     * @dataProvider getRole
     */
    public function testVisitSomeRole(Role $role, $expect)
    {
        $this->expectOutputString($expect);
        $role->accept($this->visitor);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Mock
     */
    public function testUnknownObject()
    {
        $mock = $this->getMockForAbstractClass('Behavioral\Visitor\Role');
        $mock->accept($this->visitor);
    }
}
