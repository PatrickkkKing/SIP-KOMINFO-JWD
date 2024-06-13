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
        Schema::create('pelatihan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('universitas_mahasiswa');
            $table->string('prodi_mahasiswa');
            $table->string('nohp_mahasiswa');
            $table->string('email_mahasiswa');
            $table->string('berkas_mahasiswa'); // Path to the image
            $table->string('sertifikat_mahasiswa'); // Path to the image
            $table->string('status')->default('proses');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelatihan');
    }
};
