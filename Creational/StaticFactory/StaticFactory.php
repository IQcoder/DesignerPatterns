<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/27
 * Time: 14:35
 */

namespace Creational\StaticFactory;


use phpDocumentor\Reflection\Types\Integer;

class StaticFactory
{
    /**
     * 通过传入参数创建相应对象实例
     *
     * @param string $type
     *
     * @static
     *
     * @throws \InvalidArgumentException
     * @return FormatterInterface
     */
    public static function factory($type)
    {
        $className = __NAMESPACE__ . '\Format' . ucfirst($type);

        if (!class_exists($className)) {
            throw new \InvalidArgumentException('Missing format class.');
        }

        return new $className();
    }
}