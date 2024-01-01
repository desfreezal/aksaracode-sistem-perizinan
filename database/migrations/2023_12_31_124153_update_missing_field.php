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
            $table->string('R_Guru')->nullable()->after('R_Gudang');
            $table->string('R_Sirkulasi')->nullable()->after('R_Guru');
            $table->string('tempat_bermain_berolahraga')->nullable()->after('R_Sirkulasi');
            $table->string('kerangka_dasar_struktur_kurikulum')->nullable()->after('tempat_bermain_berolahraga');
            $table->string('beban_belajar')->nullable()->after('kerangka_dasar_struktur_kurikulum');
            $table->string('kalender')->nullable()->after('beban_belajar');
            $table->string('tata_tertib')->nullable()->after('kalender');
            $table->string('data_kepala_sekolah')->nullable()->after('tata_tertib');
            $table->string('sk_pengangkatan_kepala_sekolah')->nullable()->after('data_kepala_sekolah');
            $table->string('data_instruktur')->nullable()->after('sk_pengangkatan_kepala_sekolah');
            $table->string('sumber_pendanaan')->nullable()->after('data_instruktur');
            $table->string('biaya_personal')->nullable()->after('sumber_pendanaan');
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
