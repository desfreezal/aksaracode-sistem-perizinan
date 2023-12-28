<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PendirianMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendirian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('statusDokumen_id');
            $table->string('longtitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('dokumen_survey')->nullable();
            $table->string('KTP')->nullable();
            $table->string('BPJS')->nullable();
            $table->string('Pas_Foto')->nullable();
            $table->string('Fotokopi_Rekening')->nullable();
            $table->string('Akta_Notaris')->nullable();
            $table->string('Akta_Pendirian')->nullable();
            $table->string('Surat_Permohonan')->nullable();
            $table->string('Surat_IMB')->nullable();
            $table->string('Super_Bermaterai')->nullable();
            $table->string('Data_Pendidik')->nullable();
            $table->string('Data_Tenaga_Administrasi')->nullable();
            $table->string('SK_Angkat_Pendidik')->nullable();
            $table->string('SK_Kelurahan')->nullable();
            $table->string('SK_Kecamatan')->nullable();
            $table->string('Doc_Biaya_Operasional')->nullable();
            $table->string('Doc_Rencana_Kegiatan')->nullable();
            $table->string('Doc_RKAS')->nullable();
            $table->string('Doc_RAPBTK')->nullable();
            $table->string('Doc_Status_Tanah')->nullable();
            $table->string('Doc_Milik_Tanah')->nullable();
            $table->string('Doc_ANDALALIN')->nullable();
            $table->string('Doc_UKL_UPL')->nullable();
            $table->string('Doc_RIPS')->nullable();
            $table->string('Doc_Kurikulum')->nullable();
            $table->string('Doc_Silabus')->nullable();
            $table->string('Doc_Organisasi')->nullable();
            $table->string('R_Kelas')->nullable();
            $table->string('R_Perpustakaan')->nullable();
            $table->string('R_Laboratorium')->nullable();
            $table->string('R_Kepsek')->nullable();
            $table->string('R_Ibadah')->nullable();
            $table->string('R_Konseling')->nullable();
            $table->string('R_Uks')->nullable();
            $table->string('R_Osis')->nullable();
            $table->string('R_Toilet')->nullable();
            $table->string('R_Gudang')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('category_pendirian')->onDelete('cascade');
            $table->foreign('statusDokumen_id')->references('id')->on('status_dokumen')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendirian');
    }
}
