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
            // Menghapus field keaslian_berkas
            $table->dropColumn('keaslian_berkas');

            // Mengubah tipe data field radius_jarak menjadi string
            $table->string('radius_jarak')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pendirian', function (Blueprint $table) {
            // Jika perlu, Anda dapat menambahkan kembali field keaslian_berkas
            $table->boolean('keaslian_berkas')->default(true);

            // Mengubah tipe data field radius_jarak menjadi yang semula (mungkin integer)
            $table->integer('radius_jarak')->change();
        });
    }
};
