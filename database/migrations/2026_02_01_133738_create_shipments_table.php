<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;
use App\Models\Location;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('tracking_number');
            $table->string('sender_name');
            $table->string('sender_phone');
            $table->string('sender_email');
            $table->string("sender_address");
            $table->string('receiver_name');
            $table->string('receiver_address');
            $table->string('receiver_phone');
            $table->string('receiver_email');

            $table->foreignIdFor(Location::class,'origin_id')
            ->constrained('locations')->onDelete('cascade');
            $table->foreignIdFor(Location::class,'destination_id')
                ->constrained('locations')->onDelete('cascade');

            $table->foreignIdFor(Category::class, 'category_id');
            $table->string('status');
            $table->bigInteger("amount");
            $table->string('description')->nullable();
            $table->dateTime('shipment_date')->nullable();
            $table->dateTime('expected_delivery_date')->nullable();
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->timestamps();
            $table->index(['tracking_number', "uuid"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
