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
        $table->integer('category_products_id')->nullable(false)->default(1); // 1 thu âm, 2 quay chụp
        $table->string('title')->unique();
        $table->float('price')->nullable(false)->default(0);
        $table->float('amount')->nullable(false)->default(0);
        $table->string('sub_title')->nullable();
        $table->text('html_text')->nullable();
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
