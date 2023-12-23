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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('pickup_location');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade');
            $table->foreignId('seat_id')->constrained('seats')->onUpdate('cascade');
            $table->foreignId('location_id')->constrained('locations')->onUpdate('cascade');
            $table->date('departure_date');
            $table->integer('trip_type')->default(1);
            $table->integer('price');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
