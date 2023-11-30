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
        Schema::create('melee_weapons', function (Blueprint $table) {
            $table->id();
            $table->string('base_dps');
            $table->string('blueprint_location');
            $table->string('description', 500);
            $table->string('scaling');
            $table->string('weapon');
            $table->string('weapon_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('melee_weapons');
    }
};