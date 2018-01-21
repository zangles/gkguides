<?php

namespace App\Http\Controllers;

use App\Pilot;
use Illuminate\Http\Request;

class PilotController extends Controller
{
    public function list()
    {
        $pilots = Pilot::all();

        return view('pilot.list', compact('pilots'));
    }
}
