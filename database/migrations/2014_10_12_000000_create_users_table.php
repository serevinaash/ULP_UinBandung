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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('nama_lengkap');
            $table->string('tempat_tanggal_lahir');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->string('no_wa');
            $table->string('alamat');
            $table->string('status');
            $table->string('nim')->unique()->nullable();
            $table->string('jurusan')->nullable();
            $table->string('fakultas')->nullable();
            $table->string('tahun_masuk')->nullable();
            $table->string('nik')->unique()->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('asal_instansi')->nullable();
            $table->string('status_pernikahan')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('google_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
