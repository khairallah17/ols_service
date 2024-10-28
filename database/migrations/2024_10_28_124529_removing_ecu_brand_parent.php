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
        //
        Schema::table('ecus', function (Blueprint $table) {
            // Drop the foreign key constraint (replace 'your_foreign_key_name' with the actual constraint name)
            $table->dropForeign(['ecus_brand_id']); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('ecus', function (Blueprint $table) {
            // Re-add the foreign key constraint (adjust table and column references as needed)
            $table->foreign('ecus_brand_id')->references('ecu_brand_id')->on('ecus_brands');
        });
    }
};
