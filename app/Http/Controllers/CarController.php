<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    public function index() {

        $cars = Car::all();

        return view('welcome', compact('cars'));
    }
}
