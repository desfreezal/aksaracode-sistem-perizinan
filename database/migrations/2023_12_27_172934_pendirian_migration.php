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
            $table->string('longtitude');
            $table->string('latitude');
            $table->string('lokasi');
            $table->string('dokumen_survey');
            $table->string('KTP');
            $table->string('BPJS');
            $table->string('Pas_Foto');
            $table->string('Fotokopi_Rekening');
            $table->string('Akta_Notaris');
            $table->string('Akta_Pendirian');
            $table->string('Surat_Permohonan');
            $table->string('Surat_IMB');
            $table->string('Super_Bermaterai');
            $table->string('Data_Pendidik');
            $table->string('Data_Tenaga_Administrasi');
            $table->string('SK_Angkat_Pendidik');
            $table->string('SK_Kelurahan');
            $table->string('SK_Kecamatan');
            $table->string('Doc_Biaya_Operasional');
            $table->string('Doc_Rencana_Kegiatan');
            $table->string('Doc_RKAS');
            $table->string('Doc_RAPBTK');
            $table->string('Doc_Status_Tanah');
            $table->string('Doc_Milik_Tanah');
            $table->string('Doc_ANDALALIN');
            $table->string('Doc_UKL_UPL');
            $table->string('Doc_RIPS');
            $table->string('Doc_Kurikulum');
            $table->string('Doc_Silabus');
            $table->string('Doc_Organisasi');
            $table->string('R_Kelas');
            $table->string('R_Perpustakaan');
            $table->string('R_Laboratorium');
            $table->string('R_Kepsek');
            $table->string('R_Ibadah');
            $table->string('R_Konseling');
            $table->string('R_Uks');
            $table->string('R_Osis');
            $table->string('R_Toilet');
            $table->string('R_Gudang');
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
