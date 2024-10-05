<div>
    @foreach($vehicle as $v)
        <p>{{ $vehicle->vehicle_id }}</p>
        <p>{{ $vehicle->vehicle_name }}</p>
        <p>{{ $vehicle->vehicle_fuel }}</p>
    @endforeach
</div>