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
        Schema::table('vehicles', function (Blueprint $table) {
            //    

            $table->dropForeign("vehicles_brand_id_foreign");
            $table->dropForeign("vehicles_model_id_foreign");
            $table->dropForeign("vehicles_generation_id_foreign");
            $table->dropForeign("vehicles_engine_id_foreign");
            $table->dropForeign("vehicles_ecu_id_foreign");
            $table->dropForeign("vehicles_characteristic_id_foreign");

            $table->dropColumn("brand_id");
            $table->dropColumn("model_id");
            $table->dropColumn("generation_id");
            $table->dropColumn("engine_id");
            $table->dropColumn("ecu_id");
            $table->dropColumn("characteristic_id");
            $table->dropColumn("data_chart_id");

            $table->bigInteger("brand_id")->unsigned();
            $table->bigInteger("model_id")->unsigned();
            $table->bigInteger("generation_id")->unsigned();
            $table->bigInteger("engine_id")->unsigned();
            $table->bigInteger("ecu_id")->unsigned();
            $table->bigInteger("characteristic_id")->unsigned();
            $table->bigInteger("data_chart_id")->unsigned();
            // $table->foreign("brand_id")->references("brand_id")->on("brands");
            // $table->foreign("model_id")->references("model_id")->on("models");
            // $table->foreign("generation_id")->references("generation_id")->on("generations");
            // $table->foreign("engine_id")->references("engine_id")->on("engines");
            // $table->foreign("ecu_id")->references("ecu_id")->on("ecus");
            // $table->foreign("characteristic_id")->references("vehicle_characteristic_id")->on("vehicle_characteristic_id");
            // $table->foreign("data_chart_id")->references("vehicle_data_chart_id")->on("vehicles_data_chart_id");
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
