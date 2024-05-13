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
       
        Schema::create('order_meja', function (Blueprint $table) {
            $table->id();
            $table->string('no_meja');
            $table->string('atas_nama');
            $table->date('date');
            $table->time('time');
            $table->integer('jumlah_orang');
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meja');
        Schema::dropIfExists('order_meja');
    }
};
