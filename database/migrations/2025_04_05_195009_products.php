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
        $table->id();
        $table->integer('id_category')->nullable(false)->default(1);  // 1 thu âm, 2 quay chụp
        $table->string('name');
        $table->string('sub_description')->nullable()->default(null);
        $table->integer('amount')->nullable(false)->default(0);
        $table->string('description');
        $table->integer('price')->nullable(false)->default(0);
        $table->string('image');
        $table->timestamps();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
