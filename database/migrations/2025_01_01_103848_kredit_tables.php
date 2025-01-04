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
        Schema::create('kredits', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pembeli');
            $table->decimal('harga_mobil', 15, 2);
            $table->decimal('down_payment', 15, 2);
            $table->integer('lama_cicilan'); // dalam bulan
            $table->decimal('angsuran_bulanan', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
