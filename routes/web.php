<?php

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\EnginesController;
use App\Http\Controllers\GenerationsController;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\VehicleDataChartController;
use App\Http\Controllers\VehiclesController;
use App\Models\brands;
use App\Models\categories;
use App\Models\ecus;
use App\Models\engines;
use App\Models\models;
use App\Models\vehicles;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vehicles', [VehiclesController::class, "index"]);

Route::get("/categories", [CategoriesController::class,"index"]);

Route::get("/models", [ModelsController::class,"index"]);

Route::get("/brands", [BrandsController::class,"index"]);

Route::get("/generations", [GenerationsController::class,"index"]);

Route::get("/engines", [EnginesController::class,"index"]);

Route::get("/vehicle_chart", [VehicleDataChartController::class,"index"]);

Route::get('/', function () {
    
    $categories = categories::all();
    $brands = brands::all();
    $models = models::all();
    $ecus = ecus::all();
    $engines = engines::all();

    return view('welcome', [
        "categories" => $categories,
        "brands" => $brands,
        "models" => $models,
        "ecus" => $ecus,
        "engines" => $engines
    ]);
});