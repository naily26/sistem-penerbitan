<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerusahaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->string('nama_pimpinan');
            $table->string('nomor_telepon');
            $table->text('alamat');
            $table->string('nib');
            $table->string('dokumen_nib');
            $table->date('tanggal_nib');
            $table->string('sertifikat_standar')->nullable();
            $table->string('surat_izin_trayek')->nullable();
            $table->string('surat_delivery_order')->nullable();
            $table->string('surat_pernyataan');
            $table->string('surat_permohonan');
            $table->string('nomor_permohonan')->nullable();
            $table->enum('status_pengecekan_1', ['disetujui', 'ditolak', 'menunggu'])->default('menunggu');
            $table->enum('status_pengecekan_2', ['disetujui', 'ditolak', 'menunggu'])->default('menunggu');
            $table->enum('status_penerbitan', ['menunggu', 'diterbitkan'])->nullable();
            $table->date('tanggal_permohonan')->nullable();
            $table->date('tanggal_cetak')->nullable();
            $table->date('tanggal_penerbitan')->nullable();
            $table->foreignId('kbli_id');
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perusahaans');
    }
}
