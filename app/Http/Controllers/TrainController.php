<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index() {

        $trainsArray = Train::all();
        dump($trainsArray);

        $trains = Train::whereDate('departure_time','2023-01-24')->get();

        return view('index', compact('trainsArray', 'trains'));
    }
}
