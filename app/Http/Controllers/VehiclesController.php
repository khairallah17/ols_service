<?php

namespace App\Http\Controllers;

use App\Models\vehicles;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\categories;
use App\Models\brands;
use App\Models\models;
use App\Models\ecus;
use App\Models\engines;
use App\Models\generations;
use App\Models\vehicle_chart_data;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

use App\Models\categories;
use App\Models\brands;
use App\Models\models;
use App\Models\ecus;
use App\Models\engines;
use App\Models\generations;
use App\Models\vehicle_chart_data;
use Illuminate\Http\RedirectResponse;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    public function index(): View
    {
        //
        $categories = categories::all();
        $brands = brands::all();
        $models = models::all();
        $ecus = ecus::all();
        $engines = engines::all();
        $generations = generations::all();
        $categories = categories::all();
        $brands = brands::all();
        $models = models::all();
        $ecus = ecus::all();
        $engines = engines::all();
        $generations = generations::all();
        $vehicles = vehicles::all();


        return view("vehicles.index", [
            "categories" => $categories,
            "brands" => $brands,
            "models" => $models,
            "ecus" => $ecus,
            "engines" => $engines,
            "generations" => $generations,
            "vehicles" => $vehicles
        ]);

        return view("vehicles.index", [
            "categories" => $categories,
            "brands" => $brands,
            "models" => $models,
            "ecus" => $ecus,
            "engines" => $engines,
            "generations" => $generations,
            "vehicles" => $vehicles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function getVehicleNames(Request $request)
    {
        $categoryId = $request->get('category_id');

        // Use the where method to filter by category_id
        $vehicles = vehicles::where('category_id', $categoryId)->get();
    
        return response()->json($vehicles);
    }

    public function getVehicleDetails(Request $request) {
        $vehicle = vehicles::where('vehicle_name', $request->vehicle_name)
                    ->where('brand_id', $request->brand_id)
                    ->where('model_id', $request->model_id)
                    ->where('generation_id', $request->generation_id)
                    ->where('engine_id', $request->engine_id)
                    ->where('ecu_id', $request->ecu_id)
                    ->with(['brand', 'model', 'generation', 'engine', 'ecu', "data_chart", "characteristic"])
                    ->first();
    
        return response()->json($vehicle);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validated = $request->validate([
            "vehicle_name" => "required|string|max:255",
            "vehicle_fuel" => "required|string|max:255",
            "vehicle_category" => "required|exists:categories,category_id",
            "vehicle_model" => "required|exists:models,model_id",
            "vehicle_brand" => "required|exists:brands,brand_id",
            "vehicle_engine" => "required|exists:engines,engine_id",
            "vehicle_ecu" => "required|exists:ecus,ecu_id",
            "vehicle_generation" => "required|exists:generations,generation_id",

            "vehicle_standard_power" => "required|numeric",
            "vehicle_standard_torque" => "required|numeric",
            "vehicle_cylinder" => "required|string|max:255",
            "vehicle_compression" => "required|string|max:255",
            "vehicle_bore" => "required|string|max:255",

            "vehicle_rpm" => "required|string",
            "vehicle_oem_power" => "required|string",
            "vehicle_oem_torque" => "required|string",
        ]);

        $chart_data = vehicle_chart_data::create([
            "vehicle_data_rpm" => $validated["vehicle_rpm"],
            "vehicle_data_oem_power_chart" => $validated["vehicle_oem_power"],
            "vehicle_data_oem_torque_chart" => $validated["vehicle_oem_torque"],
        ]);

        
        $vehicle = vehicles::create([
            "vehicle_name" => $validated["vehicle_name"],
            "vehicle_fuel" => $validated["vehicle_fuel"],
            "vehicle_standard_power" => $validated["vehicle_standard_power"],
            "vehicle_standard_torque" => $validated["vehicle_standard_torque"],
            "vehicle_cylinder" => $validated["vehicle_cylinder"],
            "vehicle_compression" => $validated["vehicle_compression"],
            "vehicle_bore" => $validated["vehicle_bore"],
            "generation_id" => $validated["vehicle_generation"],
            "category_id" => $validated["vehicle_category"],
            "model_id" => $validated["vehicle_model"],
            "brand_id" => $validated["vehicle_brand"],
            "engine_id" => $validated["vehicle_engine"],
            "ecu_id" => $validated["vehicle_ecu"],
            "data_chart_id" => $chart_data->vehicle_data_id,
            "characteristic_id" => 1
        ]);

        return redirect()->route('vehicles.index')->with('success', 'Vehicle created successfully!');
        // return redirect(route("vehicles.thank", ["vehicle" => $vehicle]));
    }

    public function getVehicleDetailsDropdown(Request $request)
    {
        $vehicle_name = $request->input('vehicle_name');

        $vehicles = Vehicles::where('vehicle_name', $vehicle_name)
            ->with(['model', 'brand', 'engine', ])
            ->get();

        $models = $vehicles->pluck('model.model_name', 'model_id')->unique();
        $brands = $vehicles->pluck('brand.brand_name', 'brand_id')->unique();
        $engines = $vehicles->pluck('engine.engine_name', 'engine_id')->unique();

        return response()->json([
            'models' => view('partials.vehicle_models', compact('models'))->render(),
            'brands' => view('partials.vehicle_brands', compact('brands'))->render(),
            'engines' => view('partials.vehicle_engines', compact('engines'))->render(),
        ]);

        $validated = $request->validate([
            "vehicle_name" => "required|string|max:255",
            "vehicle_fuel" => "required|string|max:255",
            "vehicle_category" => "required|exists:categories,category_id",
            "vehicle_model" => "required|exists:models,model_id",
            "vehicle_brand" => "required|exists:brands,brand_id",
            "vehicle_engine" => "required|exists:engines,engine_id",
            "vehicle_ecu" => "required|exists:ecus,ecu_id",
            "vehicle_generation" => "required|exists:generations,generation_id",

            "vehicle_standard_power" => "required|numeric",
            "vehicle_standard_torque" => "required|numeric",
            "vehicle_cylinder" => "required|string|max:255",
            "vehicle_compression" => "required|string|max:255",
            "vehicle_bore" => "required|string|max:255",

            "vehicle_rpm" => "required|string",
            "vehicle_oem_power" => "required|string",
            "vehicle_oem_torque" => "required|string",
        ]);

        $chart_data = vehicle_chart_data::create([
            "vehicle_data_rpm" => $validated["vehicle_rpm"],
            "vehicle_data_oem_power_chart" => $validated["vehicle_oem_power"],
            "vehicle_data_oem_torque_chart" => $validated["vehicle_oem_torque"],
        ]);

        
        $vehicle = vehicles::create([
            "vehicle_name" => $validated["vehicle_name"],
            "vehicle_fuel" => $validated["vehicle_fuel"],
            "vehicle_standard_power" => $validated["vehicle_standard_power"],
            "vehicle_standard_torque" => $validated["vehicle_standard_torque"],
            "vehicle_cylinder" => $validated["vehicle_cylinder"],
            "vehicle_compression" => $validated["vehicle_compression"],
            "vehicle_bore" => $validated["vehicle_bore"],
            "generation_id" => $validated["vehicle_generation"],
            "category_id" => $validated["vehicle_category"],
            "model_id" => $validated["vehicle_model"],
            "brand_id" => $validated["vehicle_brand"],
            "engine_id" => $validated["vehicle_engine"],
            "ecu_id" => $validated["vehicle_ecu"],
            "data_chart_id" => $chart_data->vehicle_data_id,
            "characteristic_id" => 1
        ]);

        return redirect()->route('vehicles.index')->with('success', 'Vehicle created successfully!');
        // return redirect(route("vehicles.thank", ["vehicle" => $vehicle]));
    }

    public function getVehicleDetailsDropdown(Request $request)
    {
        $vehicle_name = $request->input('vehicle_name');

        $vehicles = Vehicles::where('vehicle_name', $vehicle_name)
            ->with(['model', 'brand', 'engine', ])
            ->get();

        $models = $vehicles->pluck('model.model_name', 'model_id')->unique();
        $brands = $vehicles->pluck('brand.brand_name', 'brand_id')->unique();
        $engines = $vehicles->pluck('engine.engine_name', 'engine_id')->unique();

        return response()->json([
            'models' => view('partials.vehicle_models', compact('models'))->render(),
            'brands' => view('partials.vehicle_brands', compact('brands'))->render(),
            'engines' => view('partials.vehicle_engines', compact('engines'))->render(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(vehicles $vehicles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vehicles $vehicles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vehicles $vehicles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vehicles $vehicles)
    {
        //
    }

    public function getBrandsByVehicle(Request $request)    {
        $vehicleName = $request->get('vehicle_name');

        $brands = vehicles::where('vehicle_name', $vehicleName)
                        ->distinct()
                        ->pluck('brand_id');

        $brandData = brands::whereIn('brand_id', $brands)->get();


        return response()->json($brandData);
    }

    public function getModelsByBrand(Request $request){
        $brandId = $request->get('brand_id');

        $models = vehicles::where('brand_id', $brandId)
                        ->distinct()
                        ->pluck('model_id');

        $modelData = models::whereIn('model_id', $models)->get();

        return response()->json($modelData);
    }

    public function getGenerationsByModel(Request $request){
        $modelId = $request->get('model_id');

        $generations = vehicles::where('model_id', $modelId)
                            ->distinct()
                            ->pluck('generation_id');

        $generationData = generations::whereIn('generation_id', $generations)->get();

        return response()->json($generationData);
    }

    public function getEnginesByGeneration(Request $request){
        $generationId = $request->get('model_id');

        $engines = vehicles::where('model_id', $generationId)
                        ->distinct()
                        ->pluck('engine_id');

        $engineData = engines::whereIn('engine_id', $engines)->get();

        return response()->json($engineData);
    }

    public function getEcusByEngine(Request $request){
        $engineId = $request->get('engine_id');

        $ecus = vehicles::where('engine_id', $engineId)
                        ->distinct()
                        ->pluck('ecu_id');

        $ecuData = ecus::whereIn('ecu_id', $ecus)->get();

        return response()->json($ecuData);
    }






}
