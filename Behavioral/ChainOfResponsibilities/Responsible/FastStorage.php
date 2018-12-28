<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/28
 * Time: 10:16
 */

namespace Behavioral\ChainOfResponsibilities\Responsible;
use Behavioral\ChainOfResponsibilities\Handler;
use Behavioral\ChainOfResponsibilities\Request;

/**
 * FastStorage类
 */
class FastStorage extends Handler
{
    /**
     * @var array
     */
    protected $data = array();

    /**
     * @param array $data
     */
    public function __construct($data = array())
    {
        $this->data = $data;
    }

    protected function processing(Request $req)
    {
        if ('get' === $req->verb) {
            if (array_key_exists($req->key, $this->data)) {
                $req->response = $this->data[$req->key];
                return true;
            }
        }

        return false;
    }
}