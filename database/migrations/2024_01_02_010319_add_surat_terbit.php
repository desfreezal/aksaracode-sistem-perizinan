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
        Schema::table('pendirian', function (Blueprint $table) {
            $table->string('surat_terbit')->nullable()->after('Surat_Permohonan');
        });
        Schema::table('daftar_ulang', function (Blueprint $table) {
            $table->string('surat_terbit')->nullable()->after('Super_Daftar_Ulang');
        });
        Schema::table('operasional', function (Blueprint $table) {
            $table->string('surat_terbit')->nullable()->after('Super_Izin_Operasional');
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
