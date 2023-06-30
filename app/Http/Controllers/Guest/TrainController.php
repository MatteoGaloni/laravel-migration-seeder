<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        $now = fake()->time('H:i:s', 'tomorrow');
        return view('welcome', compact('trains', 'now'));
    }
}
