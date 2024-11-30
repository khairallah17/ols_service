<?php

use App\Models\models;

class Tuning extends models {

    protected $primaryKey = "tuning_id";

    protected $fillable = [
        "tuning_name"
    ];

};