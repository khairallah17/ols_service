<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicles_characteristics extends Model
{
    use HasFactory;

    protected $primaryKey = "vehicle_characteristic_id";

    protected $fillable = [
        "vehicle_characteristic_name",
        "vehicle_characteristic_active"
    ];

}
