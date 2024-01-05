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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug');
            $table->string('nomor_hp');
            $table->string('alamat');
            $table->string('tanggal');
            $table->enum('asal',['Semarang', 'Purwokerto']);
            $table->enum('tujuan',['Jogja', 'Solo']);
            $table->enum('pembayaran',['Dana', 'Transfek_Bank_BRI']);
            $table->enum('kendaraan',['Innova_Reborn', 'Elf']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
