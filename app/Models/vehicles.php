<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categories;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class vehicles extends Model
{
    use HasFactory, HasUuids;

    protected $primaryKey = 'vehicle_id';  // Define the primary key

    protected $fillable = [
        'vehicle_name',
        'vehicle_fuel',
        'vehicle_standard_power',
        'vehicle_standard_torque',
        'vehicle_cylinder',
        'vehicle_compression',
        'vehicle_bore',

        "category_id",
        "brand_id",
        "model_id",
        "generation_id",
        "engine_id",
        "ecu_id",
        "characteristic_id",
        "data_chart_id"
    ];

    public function category(): BelongsTo {
        return $this->belongsTo(categories::class);
    }

    public function model(): BelongsTo {
        return $this->belongsTo(models::class);
    }

    public function brand(): BelongsTo {
        return $this->belongsTo(brands::class);
    }

    public function generation(): BelongsTo{
        return $this->belongsTo(generations::class);
    }

    public function engine(): BelongsTo {
        return $this->belongsTo(engines::class);
    }

    public function ecu() {
        return $this->belongsTo(ecus::class);
    }

    public function characteristic() {
        return $this->belongs(vehicles_characteristics::class);
    }

    public function data_chart() {
        return $this->hasOne(vehicle_data_chart::class);
    }

}
