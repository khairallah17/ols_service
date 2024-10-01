<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicle_chart_data', function (Blueprint $table) {
            $table->id("vehicle_data_id");
            $table->string("vehicle_data_rpm");
            $table->string("vehicle_data_oem_power_chart");
            $table->string("vehicle_data_oem_torque_chart");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_chart_data');
    }
};
