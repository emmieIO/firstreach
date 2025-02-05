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
        Schema::create('shipment_histories', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->foreignId('shipment_id')->constrained();
            $table->foreignId('location_id')->constrained();
            $table->string('status');
            $table->string('remarks')->nullable();
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipment_histories');
    }
};
