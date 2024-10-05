<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>
    <body class="font-sans antialiased container mx-auto mt-10">

        <a href="/" class="underline text-blue-500 mb-6">Home</a>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <main class="">

                <!-- ADD VEHICLES -->
                <div>
                    <h1 class="text-lg font-bold">Add Vehicle</h1>
                    <form method="POST" action="{{ route('vehicles.store') }}">
                        @csrf
                            <div class="flex gap-2 flex-wrap">

                                <div class="flex flex-col gap-1">
                                    <label for="vehicle_name">Vehicle Name</label>
                                    <input type="text" name="vehicle_name" class="border rounded-sm px-2 w-[200px]" placeholder="Enter vehicle Name...">
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label for="vehicle_fuel">Vehicle Fuel Type</label>
                                    <select name="vehicle_fuel" class="border rounded-sm px-2 w-[200px]" id="">
                                        <option value="Petrol">Petrol</option>
                                        <option value="Diesel">Diesel</option>
                                    </select>
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label for="vehicle_model">Vehicle Model</label>
                                    <select name="vehicle_model" class="border rounded-sm px-2 w-[200px]" id="">
                                        @foreach($models as $model)
                                            <option value="{{ $model->model_id }}">
                                                {{ $model->model_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label for="vehicle_brand">Vehicle Brand</label>
                                    <select name="vehicle_brand" class="border rounded-sm px-2 w-[200px]" id="">
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->brand_id }}">
                                                {{ $brand->brand_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label for="vehicle_category">Vehicle Category</label>
                                    <select name="vehicle_category" class="border rounded-sm px-2 w-[200px]">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label for="vehicle_engine">Vehicle Engine</label>
                                    <select name="vehicle_engine" class="border rounded-sm px-2 w-[200px]">
                                        @foreach ($engines as $engine)
                                            <option value="{{ $engine->engine_id }}">{{ $engine->engine_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label for="vehicle_ecu">Vehicle ecu</label>
                                    <select name="vehicle_ecu" class="border rounded-sm px-2 w-[200px]">
                                        @foreach ($ecus as $ecu)
                                            <option value="{{ $ecu->ecu_id }}">{{ $ecu->ecu_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label for="vehicle_standard_power">Vehicle Standart power</label>
                                    <input type="number" name="vehicle_standard_power" class="border rounded-sm px-2 w-[200px]" placeholder="Enter vehicle standard power...">
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label for="vehicle_standard_torque">Vehicle Standart Torque</label>
                                    <input type="number" name="vehicle_standard_torque" class="border rounded-sm px-2 w-[200px]" placeholder="Enter vehicle standard torque...">
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label for="vehicle_cylinder">Vehicle Cylinder</label>
                                    <input type="text" name="vehicle_cylinder" class="border rounded-sm px-2 w-[200px]" placeholder="Enter vehicle cylinder...">
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label for="vehicle_compression">Vehicle Compression</label>
                                    <input type="text" name="vehicle_compression" class="border rounded-sm px-2 w-[200px]" placeholder="Enter vehicle compression...">
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label for="vehicle_bore">Vehicle Bore</label>
                                    <input type="text" name="vehicle_bore" class="border rounded-sm px-2 w-[200px]" placeholder="Enter vehicle bore...">
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label for="vehicle_generation">Vehicle generation</label>
                                    <select name="vehicle_generation" class="border rounded-sm px-2 w-[200px]">
                                        @foreach ($generations as $generation)
                                            <option value="{{ $generation->generation_id }}">{{ $generation->generation_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label for="vehicle_rpm">Vehicle RPM</label>
                                    <input type="text" name="vehicle_rpm" class="border rounded-sm px-2 w-[200px]" placeholder="Enter vehicle rpm...">
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label for="vehicle_oem_power">Vehicle OEM Power</label>
                                    <input type="text" name="vehicle_oem_power" class="border rounded-sm px-2 w-[200px]" placeholder="Enter vehicle oem power...">
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label for="vehicle_oem_torque">Vehicle OEM Toruqe</label>
                                    <input type="text" name="vehicle_oem_torque" class="border rounded-sm px-2 w-[200px]" placeholder="Enter vehicle oem power...">
                                </div>

                            </div>
                            <button type="submit" class="bg-blue-500 text-white p-2 px-4 rounded-lg hover:bg-blue-600 duration-200 mt-3">submit</button>
                    </form>
                </div>

                <!-- AVAILABLE VEHICLES -->
                <div class="mt-10">
                    <h2 class="text-lg font-bold">Available Vehicles</h2>
                    <ul>
                        @foreach ($vehicles as $vehicle)
                        <li class="border-b py-2">
                            <a href="#" data-id="{{ $vehicle->id }}" class="vehicle-link text-blue-600 hover:text-blue-800">
                                {{ $vehicle->vehicle_name }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <!-- Vehicle Details -->
                    <div class="w-2/3">
                        <h1 class="text-lg font-bold">Vehicle Details</h1>
                        <div id="vehicle-details" class="p-4 border rounded">
                            <!-- Details will be dynamically loaded here -->
                            <p>Select a vehicle to view its details.</p>
                        </div>
                    </div>
                </div>

                <!-- SEARCH VEHICLE -->
                <div class="flex flex-wrap gap-4 mt-10">
                    
                    <div class="flex flex-col gap-1">
                        <!-- Vehicle Name -->
                        <label for="vehicle_category">Vehicle Category</label>
                        <select id="vehicle_category" class="border rounded-sm px-2 w-[200px]">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex flex-col gap-1">
                        <!-- Vehicle Name -->
                        <label for="vehicle_name">Vehicle Name</label>
                        <select id="vehicle_name" class="border rounded-sm px-2 w-[200px]">
                            <option value="">Select Vehicle Name</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-1">
                        <!-- Brand -->
                        <label for="vehicle_brand">Vehicle Brand</label>
                        <select id="vehicle_brand" class="border rounded-sm px-2 w-[200px]" disabled>
                            <option value="">Select Brand</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-1">
                        <!-- Model -->
                        <label for="vehicle_model">Vehicle Model</label>
                        <select id="vehicle_model" class="border rounded-sm px-2 w-[200px]" disabled>
                            <option value="">Select Model</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-1">
                        <!-- Generation -->
                        <label for="vehicle_generation">Vehicle Generation</label>
                        <select id="vehicle_generation" class="border rounded-sm px-2 w-[200px]" disabled>
                            <option value="">Select Generation</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-1">
                        <!-- Engine -->
                        <label for="vehicle_engine">Vehicle Engine</label>
                        <select id="vehicle_engine" class="border rounded-sm px-2 w-[200px]" disabled>
                            <option value="">Select Engine</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-1">
                        <!-- ECU -->
                        <label for="vehicle_ecu">Vehicle ECU</label>
                        <select id="vehicle_ecu" class="border rounded-sm px-2 w-[200px]" disabled>
                            <option value="">Select ECU</option>
                        </select>
                    </div>

                    
                </div>
                <div id="vehicle_details">

                </div>



        </main>

        <script>

                $(document).ready(function () {
                    // Fetch vehicle names based on selected category
                    $('#vehicle_category').on('change', function() {
                        let categoryId = $(this).val();
                        
                        // Reset all the dependent select fields and disable them
                        resetSelectField('#vehicle_name');
                        resetSelectField('#vehicle_brand');
                        resetSelectField('#vehicle_model');
                        resetSelectField('#vehicle_generation');
                        resetSelectField('#vehicle_engine');
                        resetSelectField('#vehicle_ecu');
                        $('#vehicle_details').empty(); // Clear previous vehicle details
                        
                        if (categoryId) {
                            console.log(categoryId)
                            $.ajax({
                                url: "{{ route('vehicle.names') }}",
                                type: 'GET',
                                data: { category_id: categoryId },
                                success: function(response) {
                                    console.log(response)
                                    let options = '<option value="">Select Vehicle Name</option>';
                                    response.forEach(function(vehicle) {
                                        options += `<option value="${vehicle.vehicle_name}">${vehicle.vehicle_name}</option>`;
                                    });
                                    $('#vehicle_name').html(options).removeAttr('disabled');
                                },
                                error: function(err) {
                                    console.error("Error fetching vehicle names", err);
                                }
                            });
                        }
                    });

                    // Fetch brands based on selected vehicle name
                    $('#vehicle_name').on('change', function() {
                        let vehicleName = $(this).val();
                        
                        resetSelectField('#vehicle_brand');
                        resetSelectField('#vehicle_model');
                        resetSelectField('#vehicle_generation');
                        resetSelectField('#vehicle_engine');
                        resetSelectField('#vehicle_ecu');
                        $('#vehicle_details').empty(); // Clear previous vehicle details
                        
                        if (vehicleName) {
                            $.ajax({
                                url: "{{ route('vehicle.brands') }}",
                                type: 'GET',
                                data: { vehicle_name: vehicleName },
                                success: function(response) {
                                    console.log(response)
                                    let options = '<option value="">Select Brand</option>';
                                    response.forEach(function(brand) {
                                        options += `<option value="${brand.brand_id}">${brand.brand_name}</option>`;
                                    });
                                    $('#vehicle_brand').html(options).removeAttr('disabled');
                                },
                                error: function(err) {
                                    console.error("Error fetching brands", err);
                                }
                            });
                        }
                    });

                    // Fetch models based on selected brand
                    $('#vehicle_brand').on('change', function() {
                        let brandId = $(this).val();
                        
                        resetSelectField('#vehicle_model');
                        resetSelectField('#vehicle_generation');
                        resetSelectField('#vehicle_engine');
                        resetSelectField('#vehicle_ecu');
                        $('#vehicle_details').empty(); // Clear previous vehicle details
                        
                        if (brandId) {
                            $.ajax({
                                url: "{{ route('vehicle.models') }}",
                                type: 'GET',
                                data: { brand_id: brandId },
                                success: function(response) {
                                    let options = '<option value="">Select Model</option>';
                                    response.forEach(function(model) {
                                        options += `<option value="${model.model_id}">${model.model_name}</option>`;
                                    });
                                    $('#vehicle_model').html(options).removeAttr('disabled');
                                },
                                error: function(err) {
                                    console.error("Error fetching models", err);
                                }
                            });
                        }
                    });

                    // Fetch generations based on selected model
                    $('#vehicle_model').on('change', function() {
                        let modelId = $(this).val();
                        
                        resetSelectField('#vehicle_generation');
                        resetSelectField('#vehicle_engine');
                        resetSelectField('#vehicle_ecu');
                        $('#vehicle_details').empty(); // Clear previous vehicle details
                        
                        if (modelId) {
                            $.ajax({
                                url: "{{ route('vehicle.generations') }}",
                                type: 'GET',
                                data: { model_id: modelId },
                                success: function(response) {
                                    let options = '<option value="">Select Generation</option>';
                                    response.forEach(function(generation) {
                                        options += `<option value="${generation.generation_id}">${generation.generation_name}</option>`;
                                    });
                                    $('#vehicle_generation').html(options).removeAttr('disabled');
                                },
                                error: function(err) {
                                    console.error("Error fetching generations", err);
                                }
                            });
                        }
                    });

                    // Fetch engines based on selected generation
                    $('#vehicle_generation').on('change', function() {
                        let generationId = $(this).val();
                        
                        resetSelectField('#vehicle_engine');
                        resetSelectField('#vehicle_ecu');
                        $('#vehicle_details').empty(); // Clear previous vehicle details
                        
                        if (generationId) {
                            $.ajax({
                                url: "{{ route('vehicle.engines') }}",
                                type: 'GET',
                                data: { generation_id: generationId },
                                success: function(response) {
                                    let options = '<option value="">Select Engine</option>';
                                    response.forEach(function(engine) {
                                        options += `<option value="${engine.engine_id}">${engine.engine_name}</option>`;
                                    });
                                    $('#vehicle_engine').html(options).removeAttr('disabled');
                                },
                                error: function(err) {
                                    console.error("Error fetching engines", err);
                                }
                            });
                        }
                    });

                    // Fetch ECUs based on selected engine
                    $('#vehicle_engine').on('change', function() {
                        let engineId = $(this).val();
                        
                        resetSelectField('#vehicle_ecu');
                        $('#vehicle_details').empty(); // Clear previous vehicle details
                        
                        if (engineId) {
                            $.ajax({
                                url: "{{ route('vehicle.ecus') }}",
                                type: 'GET',
                                data: { engine_id: engineId },
                                success: function(response) {
                                    let options = '<option value="">Select ECU</option>';
                                    response.forEach(function(ecu) {
                                        options += `<option value="${ecu.ecu_id}">${ecu.ecu_name}</option>`;
                                    });
                                    $('#vehicle_ecu').html(options).removeAttr('disabled');
                                },
                                error: function(err) {
                                    console.error("Error fetching ECUs", err);
                                }
                            });
                        }
                    });

                    // Fetch full vehicle details based on selected ECU
                    $('#vehicle_ecu').on('change', function() {
                        let vehicleName = $('#vehicle_name').val();
                        let brandId = $('#vehicle_brand').val();
                        let modelId = $('#vehicle_model').val();
                        let generationId = $('#vehicle_generation').val();
                        let engineId = $('#vehicle_engine').val();
                        let ecuId = $(this).val();
                        
                        if (ecuId) {
                            $.ajax({
                                url: "{{ route('vehicle.details') }}", // API route for fetching final vehicle details
                                type: 'GET',
                                data: {
                                    vehicle_name: vehicleName,
                                    brand_id: brandId,
                                    model_id: modelId,
                                    generation_id: generationId,
                                    engine_id: engineId,
                                    ecu_id: ecuId
                                },
                                success: function(response) {
                                    displayVehicleDetails(response);
                                },
                                error: function(err) {
                                    console.error("Error fetching vehicle details", err);
                                }
                            });
                        }
                    });

                    // Utility function to reset and disable select fields
                    function resetSelectField(selector) {
                        $(selector).html('<option value="">Select</option>').attr('disabled', 'disabled');
                    }

                    // Function to display vehicle details
                    function displayVehicleDetails(vehicle) {
                        let vehicleDetailsHtml = `
                            <h3>Vehicle Details</h3>
                            <p><strong>Name:</strong> ${vehicle.vehicle_name}</p>
                            <p><strong>Brand:</strong> ${vehicle.brand.brand_name}</p>
                            <p><strong>Model:</strong> ${vehicle.model.model_name}</p>
                            <p><strong>Generation:</strong> ${vehicle.generation.generation_name}</p>
                            <p><strong>Engine:</strong> ${vehicle.engine.engine_name}</p>
                            <p><strong>ECU:</strong> ${vehicle.ecu.ecu_name}</p>
                        `;
                        $('#vehicle_details').html(vehicleDetailsHtml).show();
                    }
                });


        </script>
    </body>
</html>
