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
        Schema::table('ecus', function (Blueprint $table) {
            $table->dropColumn('ecus_brand_id'); // Replace with the column name
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ecus', function (Blueprint $table) {
            $table->dropColumn('ecus_brand_id'); // Replace with the column name
        });
    }
};
