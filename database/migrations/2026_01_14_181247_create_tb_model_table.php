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
        Schema::create('tb_model', function (Blueprint $table) {
            $table->id('model_id');
            $table->string('nama_model', 100);
            $table->unsignedBigInteger('brand_id');  // Foreign key ke tb_brand
            $table->timestamps();

            // Menambahkan foreign key constraint
            $table->foreign('brand_id')->references('brand_id')->on('tb_brand')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_model');
    }
};

