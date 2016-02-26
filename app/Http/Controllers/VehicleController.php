<?php

namespace App\Http\Controllers;

use App;
use App\Vehicles\Jeep;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class VehicleController extends Controller
{

    protected $car;

    public function __construct(Jeep $car)
    {
        $this->car = $car;
    }
    public function cost(Jeep $car)
    {
        //$car = $this->app->make('\App\Vehicles\Jeep');


        $cost = $car->refuel(60);

        echo $cost;
    }

    public function show(){
        dd($this->car);
    }
}
