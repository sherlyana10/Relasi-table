<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('produks', function (Blueprint $table) {
        $table->id(); 
        $table->string('nama_produk'); 
        $table->unsignedBigInteger('kategori_id'); 
        $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade'); 
        $table->timestamps(); 
    });
}

public function down()
{
    Schema::dropIfExists('produks'); 
}

};
