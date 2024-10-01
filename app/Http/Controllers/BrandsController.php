<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brands;

class BrandsController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $brands = brands::all();
        return response()->json($brands);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(brands $brands)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(brands $brands)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, brands $brands)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(brands $brands)
    {
        //
    }
}
