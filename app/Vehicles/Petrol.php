<?php
/**
 * Created by PhpStorm.
 * User: albert
 * Date: 26/02/16
 * Time: 20:05
 */
namespace App\Vehicles;

class Petrol implements Fuel
{
    public function getPrice()
    {
        return 1;
    }
}