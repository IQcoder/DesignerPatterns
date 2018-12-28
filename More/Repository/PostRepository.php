<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/28
 * Time: 11:51
 */

namespace More\Repository;


/**
 * Post 对应的 Repository
 * 该类介于数据实体层(Post) 和访问对象层(Storage)之间
 *
 * Repository 封装了持久化对象到数据存储器以及在展示层显示面向对象的视图操作
 *
 * Repository 还实现了领域层和数据映射层的分离和单向依赖
 *
 * PostRepository 类
 * @package More\Repository
 */
class PostRepository
{
    private $persistence;

    public function __construct(Storage $persistence)
    {
        $this->persistence = $persistence;
    }

    /**
     * 通过指定id返回Post对象
     *
     * @param int $id
     * @return Post|null
     */
    public function getById($id)
    {
        $arrayData = $this->persistence->retrieve($id);
        if (is_null($arrayData)) {
            return null;
        }

        $post = new Post();
        $post->setId($arrayData['id']);
        $post->setAuthor($arrayData['author']);
        $post->setCreated($arrayData['created']);
        $post->setText($arrayData['text']);
        $post->setTitle($arrayData['title']);

        return $post;
    }

    /**
     * 保存指定对象并返回
     *
     * @param Post $post
     * @return Post
     */
    public function save(Post $post)
    {
        $id = $this->persistence->persist(array(
            'author' => $post->getAuthor(),
            'created' => $post->getCreated(),
            'text' => $post->getText(),
            'title' => $post->getTitle()
        ));

        $post->setId($id);
        return $post;
    }

    /**
     * 删除指定的 Post 对象
     *
     * @param Post $post
     * @return bool
     */
    public function delete(Post $post)
    {
        return $this->persistence->delete($post->getId());
    }
}