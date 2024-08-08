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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_terima');
            $table->enum('tipe_surat', ['masuk', 'keluar']);
            $table->string('nomor_surat');
            $table->date('tanggal_surat');
            $table->string('dari_kepada');
            $table->string('hal');
            $table->text('keterangan');
            $table->string('kode_arsip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
