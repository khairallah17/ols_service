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

Route::resource('vehicles', VehiclesController::class)->only(["index","store"]);

Route::get('/api/vehicle/names', [VehiclesController::class, 'getVehicleNames'])->name('vehicle.names'); // Fetch vehicles by category
Route::get('/api/vehicle/brands', [VehiclesController::class, 'getBrandsByVehicle'])->name('vehicle.brands');
Route::get('/api/vehicle/models', [VehiclesController::class, 'getModelsByBrand'])->name('vehicle.models');
Route::get('/api/vehicle/generations', [VehiclesController::class, 'getGenerationsByModel'])->name('vehicle.generations');
Route::get('/api/vehicle/engines', [VehiclesController::class, 'getEnginesByGeneration'])->name('vehicle.engines');
Route::get('/api/vehicle/ecus', [VehiclesController::class, 'getEcusByEngine'])->name('vehicle.ecus');
Route::get('/api/vehicle/details', [VehiclesController::class, 'getVehicleDetails'])->name('vehicle.details');

Route::resource("categories", CategoriesController::class)->only(["index","store"]);

Route::resource("models", ModelsController::class)->only(["index","store"]);

Route::resource("brands", BrandsController::class)->only(["index", "store"]);

Route::resource("generations", GenerationsController::class)->only(["index", "store"]);

Route::resource("engines", EnginesController::class)->only(["index", "store"]);

Route::get("engines/search", [EnginesController::class, "search"]);

Route::resource("vehicle_chart", VehicleDataChartController::class)->only(["index", "store"]);

// Route::get('/', function () {
    
//     $categories = categories::all();
//     $brands = brands::all();
//     $models = models::all();
//     $ecus = ecus::all();
//     $engines = engines::all();

//     return view('welcome', [
//         "categories" => $categories,
//         "brands" => $brands,
//         "models" => $models,
//         "ecus" => $ecus,
//         "engines" => $engines
//     ]);
// });