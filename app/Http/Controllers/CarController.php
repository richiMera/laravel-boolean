<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    public function index() {
        

        $cars = Car::all();
        $ford = [];
        $seat = [];
        $opel = [];
        foreach ($cars as $car) {
            if ($car->car_make == 'Ford') {
                $ford[] = $car;
            } elseif ($car->car_make == 'Seat') {
                $seat[] = $car;
            } elseif ($car->car_make == 'Opel') {
                $opel[] = $car;
            }
        }

        return view('welcome', compact('cars', 'ford', 'seat', 'opel'));
    }

    public function show($id) {
        return view('car', ['product'=> $id]);
    }
}
