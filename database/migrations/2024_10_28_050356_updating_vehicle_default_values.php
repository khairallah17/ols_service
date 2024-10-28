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
            $table->integer('vehicle_bore')->nullable()->change();
            $table->integer('vehicle_cylinder')->nullable()->change();
            $table->integer('vehicle_compression')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->integer('bore')->nullable(false)->change();
            $table->integer('cylinder')->nullable(false)->change();
            $table->integer('compression')->nullable(false)->change();
        });
    }
};
