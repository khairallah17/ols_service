<?php

namespace App\Http\Controllers;

use App\Models\engines;
use Illuminate\Http\Request;

class EnginesController extends Controller
{
    //

    public function index () {
    
        $engines = engines::all();

        return response()->json($engines);

    }

}
