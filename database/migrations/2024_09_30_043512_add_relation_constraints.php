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

        Schema::table("vehicle_chart_data", function (Blueprint $table) {
            $table->id("vehicle_data_id");
        });

        Schema::table('vehicles', function (Blueprint $table) {
            //

            // $table->dropForeign("vehicles_brand_id_foreign");

            // $table->dropForeign("vehicles_brand_id_foreign");
            // $table->dropForeign("vehicles_model_id_foreign");
            // $table->dropForeign("vehicles_generation_id_foreign");
            // $table->dropForeign("vehicles_engine_id_foreign");
            // $table->dropForeign("vehicles_ecu_id_foreign");
            // $table->dropForeign("vehicles_characteristic_id_foreign");
            // $table->dropForeign("vehicles_data_chart_id_foreign");

            $table->foreign("brand_id")->references("brand_id")->on("brands");
            $table->foreign("model_id")->references("model_id")->on("models");
            $table->foreign("generation_id")->references("generation_id")->on("generations");
            $table->foreign("engine_id")->references("engine_id")->on("engines");
            $table->foreign("ecu_id")->references("ecu_id")->on("ecus");
            $table->foreign("characteristic_id")->references("vehicle_characteristic_id")->on("vehicles_characteristics");
            $table->foreign("data_chart_id")->references("vehicle_data_id")->on("vehicle_chart_data");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicles', function (Blueprint $table) {
            //
        });
    }
};
