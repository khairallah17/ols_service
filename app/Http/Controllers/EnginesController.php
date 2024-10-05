<?php

namespace App\Http\Controllers;

use App\Models\engines;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EnginesController extends Controller
{
    //

    public function index () {
    
        $engines = engines::all();

        return response()->json($engines);

    }

    public function store(): RedirectResponse{
        return redirect(route("engines.index"));
    }

    public function search(Request $request) {

        $data = $request->header("engine_name");

        $res = engines::where("engine_name", $data)->first();

        return response()->json($res);

    }

}
