<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/28
 * Time: 11:40
 */

namespace Behavioral\Visitor;


/**
 * 访问者接口
 */
interface RoleVisitorInterface
{
    /**
     * 访问 User 对象
     *
     * @param User $role
     */
    public function visitUser(User $role);

    /**
     * 访问 Group 对象
     *
     * @param Group $role
     */
    public function visitGroup(Group $role);
}