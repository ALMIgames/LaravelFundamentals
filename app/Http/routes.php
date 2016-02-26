<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});


//Dependency injection correcte

//class Jeep
//{
//    public function __construct(Petrol $fuel)
//    {
//        $this->fuel = $fuel;
//    }
//
//    public function refuel($litres)
//    {
//        return $litres * $this->fuel->getPrice();
//    }
//}
//
//class Petrol
//{
//    public function getPrice()
//    {
//        return 130.7;
//    }
//}
//
//$petrol = new Petrol;
//$car = new JeepWrangler($petrol);
//
//$cost = $car->refuel(60);


//DEPENDENCY INVERSION (D de SOLID)


class Jeep
{
    public function __construct(Petrol $fuel)
    {
        $this->fuel = $fuel;
    }

    public function refuel($litres)
    {
        return $litres * $this->fuel->getPrice();
    }
}

class Petrol
{
    public function getPrice()
    {
        return 130.7;
    }
}

//$gasolina = new Gasolina;
//$car = new Jeep($gasolina);

$car = $this->app->make('Jeep');
echo $car->refuel(60);

dd($this->app);