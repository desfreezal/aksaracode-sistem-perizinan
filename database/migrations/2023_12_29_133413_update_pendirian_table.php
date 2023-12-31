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
        Schema::table('pendirian', function (Blueprint $table) {
            // Menambahkan kolom 'denah_peta'
            $table->string('denah_peta')->nullable();

            // Menambahkan kolom 'radius_jarak'
            $table->string('radius_jarak')->nullable();

            // Menambahkan kolom 'surat_tidak_keberatan'
            $table->string('surat_tidak_keberatan')->nullable();

            // Menambahkan kolom 'surat_tidak_sengketa'
            $table->string('surat_tidak_sengketa')->nullable();

            // Menambahkan kolom 'sarana_prasarana'
            $table->text('sarana_prasarana')->nullable();
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
