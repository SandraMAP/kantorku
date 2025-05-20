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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('jabatan', 50);
            $table->enum('jenis kelamin', ['laki-laki','perempuan']);
            $table->text('alamat'); 
            $table->string('no_telepon', 15);
            $table->string('email')->unique();
            $table->string('foto')->nullable(); // Untuk menyimpan path/nama file foto
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
