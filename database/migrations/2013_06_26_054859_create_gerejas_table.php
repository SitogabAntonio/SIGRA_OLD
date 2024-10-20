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
        Schema::create('gereja', function (Blueprint $table) {
            $table->id();
            $table->string('nama_gereja');
            $table->text('kutipan')->nullable();
            $table->text('online')->nullable();
            $table->text('sesi')->nullable();
            $table->text('kontak')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gereja');
    }
};
