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

    </head>
    <body class="font-sans antialiased container mx-auto">
        <main class="flex items-center gap-4">

            <div class="flex flex-col gap-2">
                <label for="categories">Categories</label>
                <select class="rounded-md outline-none focus:outline-none border border-gray-400 w-36">
                    @foreach ($categories as $category)
                        <option value="{{$category->category_name}}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col gap-2">
                <label for="brands">brands</label>
                <select class="rounded-md outline-none focus:outline-none border border-gray-400 w-36">
                    @foreach ($brands as $brand)
                        <option value="{{$brand->brand_name}}">{{ $brand->brand_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col gap-2">
                <label for="models">models</label>
                <select class="rounded-md outline-none focus:outline-none border border-gray-400 w-36">
                    @foreach ($models as $model)
                        <option value="{{$model->model_name}}">{{ $model->model_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col gap-2">
                <label for="engines">engines</label>
                <select class="rounded-md outline-none focus:outline-none border border-gray-400 w-36">
                    @foreach ($engines as $engine)
                        <option value="{{$engine->engine_name}}">{{ $engine->engine_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col gap-2">
                <label for="ecus">ecus</label>
                <select class="rounded-md outline-none focus:outline-none border border-gray-400 w-36">
                    @foreach ($ecus as $ecu)
                        <option value="{{$ecu->ecu_name}}">{{ $ecu->ecu_name }}</option>
                    @endforeach
                </select>
            </div>

        </main>
    </body>
</html>
