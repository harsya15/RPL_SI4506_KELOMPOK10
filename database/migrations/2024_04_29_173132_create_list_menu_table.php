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
        Schema::create('list_menu', function (Blueprint $table) {
            $table->id();
            $table->string('nama_menu');
            $table->string('deskripsi_menu');
            $table->string('kategori_menu');
            $table->integer('harga_menu');
            $table->string('gambar_menu');
            $table->string('label_menu')->default('no_label');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_menu');
    }
};
