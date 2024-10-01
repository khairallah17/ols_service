<?php

namespace App\Http\Controllers;

use App\Models\models;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        //
        return view("models.index");
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
    public function store(Request $request):RedirectResponse
    {
        //

        $validated= $request->validate([
            "model_name" => "required|string|max:255"
        ]);

        models::create([
            "model_name" => $validated["model_name"]
        ]);

        return redirect(route("models.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(models $models)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(models $models)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, models $models)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(models $models)
    {
        //
    }
}
