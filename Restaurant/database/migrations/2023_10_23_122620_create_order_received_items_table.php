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
        Schema::create('order_received_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orderrecieved_id')->references('id')->on('order_receiveds')->onDelete('cascade');
            $table->foreignId('menu_id')->references('id')->on('menus')->onDelete('cascade');
            $table->integer('price');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_received_items');
    }
};
