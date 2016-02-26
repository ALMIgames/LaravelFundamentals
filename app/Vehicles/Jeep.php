<?php
/**
 * Created by PhpStorm.
 * User: albert
 * Date: 26/02/16
 * Time: 20:04
 */
namespace App\Vehicles;

class Jeep
{
    public function __construct(Fuel $fuel)
    {
        $this->fuel = $fuel;

    }

    public function refuel($litres)
    {
        return $litres * $this->fuel->getPrice();
    }
}