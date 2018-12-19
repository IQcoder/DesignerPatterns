<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/19
 * Time: 15:26
 */

namespace DesignerPatterns\Builder;


class CarBuilder implements BuilderInterface
{
    /**
     * @var Parts\Car
     */
    protected $car;

    /**
     * @return void
     */
    public function addDoors()
    {
        $this->car->setPart('rightdoor', new Parts\Door());
        $this->car->setPart('leftDoor', new Parts\Door());
    }

    /**
     * @return void
     */
    public function addEngine()
    {
        $this->car->setPart('engine', new Parts\Engine());
    }

    /**
     * @return void
     */
    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Parts\Wheel());
        $this->car->setPart('wheelRF', new Parts\Wheel());
        $this->car->setPart('wheelLR', new Parts\Wheel());
        $this->car->setPart('wheelRR', new Parts\Wheel());
    }

    /**
     * @return void
     */
    public function createVehicle()
    {
        $this->car = new Parts\Car();
    }

    /**
     * @return Parts\Car
     */
    public function getVehicle()
    {
        return $this->car;
    }
}