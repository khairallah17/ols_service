<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\generations;

class GenerationsController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $generations = generations::all();
        return response()->json($generations);
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
    public function show(generations $generations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(generations $generations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, generations $generations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(generations $generations)
    {
        //
    }
}
