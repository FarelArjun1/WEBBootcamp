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
        Schema::create('pinjam', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_buku')->nullable();
            $table->foreign('id_buku')->references('id')->on('buku');
            $table->string('nama_pinjam');
            $table->string('nomor_hp');
            $table->enum('status', ['Dipinjam', 'Dikembalikan']);
            $table->date("tanggal_pinjam");
            $table->date("tanggal_kembali");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pinjam', function (Blueprint $table) {
            $table->dropForeign(['id_buku']);
            $table->dropColumn('id_buku');
        });
    }
};
