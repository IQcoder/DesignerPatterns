<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/28
 * Time: 11:51
 */

namespace More\Repository;


/**
 * Storage接口
 *
 * 该接口定义了访问数据存储器的方法
 * 具体的实现可以是多样化的，比如内存、关系型数据库、NoSQL数据库等等
 *
 * @package More\Repository
 */
interface Storage
{
    /**
     * 持久化数据方法
     * 返回新创建的对象ID
     *
     * @param array() $data
     * @return int
     */
    public function persist($data);

    /**
     * 通过指定id返回数据
     * 如果为空返回null
     *
     * @param int $id
     * @return array|null
     */
    public function retrieve($id);

    /**
     * 通过指定id删除数据
     * 如果数据不存在返回false，否则如果删除成功返回true
     *
     * @param int $id
     * @return bool
     */
    public function delete($id);
}