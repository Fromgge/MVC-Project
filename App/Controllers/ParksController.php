<?php

namespace App\Controllers;

use App\Models\Car;
use Core\Controller;
use Core\Model;

class ParksController extends Controller
{
    public function show(int $id)
    {
//        dd(Car::select(['model', 'price'])->where('price', '>', 15)->get());
        d(Car::all());
    }
}