<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/28
 * Time: 11:29
 */

namespace Behavioral\Strategy;


/**
 * ObjectCollection类
 */
class ObjectCollection
{
    /**
     * @var array
     */
    private $elements;

    /**
     * @var ComparatorInterface
     */
    private $comparator;

    /**
     * @param array $elements
     */
    public function __construct(array $elements = array())
    {
        $this->elements = $elements;
    }

    /**
     * @return array
     */
    public function sort()
    {
        if (!$this->comparator) {
            throw new \LogicException("Comparator is not set");
        }

        $callback = array($this->comparator, 'compare');
        uasort($this->elements, $callback);

        return $this->elements;
    }

    /**
     * @param ComparatorInterface $comparator
     *
     * @return void
     */
    public function setComparator(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }
}