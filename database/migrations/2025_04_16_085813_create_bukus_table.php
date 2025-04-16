<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('bukus', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('perpustakaan_id');
        $table->string('judul');
        $table->string('pengarang');
        $table->year('tahun_terbit');
        $table->timestamps();

        $table->foreign('perpustakaan_id')->references('id')->on('perpustakaans')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
