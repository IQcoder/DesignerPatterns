<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/28
 * Time: 11:04
 */

namespace Behavioral\Memento;

class Memento
{
    /* @var mixed */
    private $state;

    /**
     * @param mixed $stateToSave
     */
    public function __construct($stateToSave)
    {
        $this->state = $stateToSave;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }
}