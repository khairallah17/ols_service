<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categories;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Tuning;

class vehicles extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';  // Define the primary key

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
        "data_chart_id",
        "vehicle_tuning",
        "vehicle_characteristic",
        "vehicle_tuning_details"
    ];

    public function category(): BelongsTo {
        return $this->belongsTo(categories::class, "category_id");
    }

    public function model(): BelongsTo {
        return $this->belongsTo(models::class, "model_id");
    }

    public function brand(): BelongsTo {
        return $this->belongsTo(brands::class, "brand_id");
    }

    public function generation(): BelongsTo{
        return $this->belongsTo(generations::class, "generation_id");
    }

    public function engine(): BelongsTo {
        return $this->belongsTo(engines::class, "engine_id");
    }

    public function ecu(): BelongsTo {
        return $this->belongsTo(ecus::class, "ecu_id");
    }

    public function data_chart(): HasOne {
        return $this->hasOne(vehicle_chart_data::class, "vehicle_data_id");
    }

    public function vehicle_tuning(): HasOne {
        return $this->hasOne(Tuning::class, "vehicle_tuning");
    }

}
