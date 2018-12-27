<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/27
 * Time: 15:49
 */

namespace Structural\DataMapper;

use Doctrine\DBAL\Connection;

/**
 * UserMapper类（数据映射类）
 */
class UserMapper
{
    /**
     * @var Connection
     */
    protected $adapter;

    /**
     * @param Connection $dbLayer
     */
    public function __construct(Connection $dbLayer)
    {
        $this->adapter = $dbLayer;
    }

    /**
     * 将用户对象保存到数据库
     *
     * @param User $user
     *
     * @return boolean
     */
    public function save(User $user)
    {
        /* $data的键名对应数据库表字段 */
        $data = array(
            'userid'   => $user->getUserId(),
            'username' => $user->getUsername(),
            'email'    => $user->getEmail(),
        );

        /* 如果没有指定ID则在数据库中创建新纪录，否则更新已有记录 */
        if (null === ($id = $user->getUserId())) {
            unset($data['userid']);
            $this->adapter->insert($data);

            return true;
        } else {
            $this->adapter->update($data, array('userid = ?' => $id));

            return true;
        }
    }

    /**
     * 基于ID在数据库中查找用户并返回用户实例
     *
     * @param int $id
     *
     * @throws \InvalidArgumentException
     * @return User
     */
    public function findById($id)
    {
        $result = $this->adapter->find($id);

        if (0 == count($result)) {
            throw new \InvalidArgumentException("User #$id not found");
        }
        $row = $result->current();

        return $this->mapObject($row);
    }

    /**
     * 获取数据库所有记录并返回用户实例数组
     *
     * @return array
     */
    public function findAll()
    {
        $resultSet = $this->adapter->findAll();
        $entries   = array();

        foreach ($resultSet as $row) {
            $entries[] = $this->mapObject($row);
        }

        return $entries;
    }

    /**
     * 映射表记录到对象
     *
     * @param array $row
     *
     * @return User
     */
    protected function mapObject(array $row)
    {
        $entry = new User();
        $entry->setUserID($row['userid']);
        $entry->setUsername($row['username']);
        $entry->setEmail($row['email']);

        return $entry;
    }
}