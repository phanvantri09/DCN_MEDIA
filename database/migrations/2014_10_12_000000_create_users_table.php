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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false)->default('');
            $table->string('email',128);
            $table->string('password')->nullable(false)->default('');
            $table->string('tag')->default('Kỹ sư âm thanh');
            $table->string('image')->nullable(false)->default('');
            $table->integer('is_admin')->default(1)->comment("1 user, 999 admin");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
