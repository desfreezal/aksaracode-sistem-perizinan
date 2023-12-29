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
        Schema::create('operasional', function (Blueprint $table) {
            $table->string('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('statusDokumen_id');
            $table->string('longtitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('dokumen_survey')->nullable();
            $table->string('Super_Izin_Operasional')->nullable();
            $table->string('Struk_Organisasi')->nullable();
            $table->string('Akta_Notaris')->nullable();
            $table->string('Surat_IMB')->nullable();
            $table->string('Akta_Pendirian')->nullable();
            $table->string('Super_Bermaterai')->nullable();
            $table->string('Data_Anak_Dididk')->nullable();
            $table->string('Data_Pendidik')->nullable();
            $table->string('Rencana_Jadwal')->nullable();
            $table->string('Doc_Milik_Lahan')->nullable();
            $table->string('Doc_Bukti_Hukum')->nullable();
            $table->string('BPJS')->nullable();
            $table->string('Fotokopi_Rekening')->nullable();
            $table->string('Data_Daya_Tampung')->nullable();
            $table->string('SK_Izin_Pendirian')->nullable();
            $table->string('Piagam_Akreditasi')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('category_pendirian')->onDelete('cascade');
            $table->foreign('statusDokumen_id')->references('id')->on('status_dokumen')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operasional');
    }
};
