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
        Schema::create('tb_detail', function (Blueprint $table) {
            $table->id('detail_id'); 
            $table->string('ukuran');  
            $table->string('warna');   
            $table->string('kondisi'); 
            $table->integer('harga');  
            $table->unsignedBigInteger('model_id');  
            $table->timestamps();  

            // Menambahkan foreign key yang menghubungkan tb_detail dengan tb_model
            $table->foreign('model_id')->references('model_id')->on('tb_model')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_detail');
    }
};
