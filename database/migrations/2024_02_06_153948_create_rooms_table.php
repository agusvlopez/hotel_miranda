<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('room_type');
            $table->text('description');
            $table->decimal('price', 8, 2); // Decimal con 8 dígitos en total, 2 después del punto decimal
            $table->decimal('discount', 5, 2)->nullable(); // Nullable para habitaciones sin descuento
            $table->decimal('discountedPrice', 8, 2)->nullable(); // Nullable para habitaciones sin descuento
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
