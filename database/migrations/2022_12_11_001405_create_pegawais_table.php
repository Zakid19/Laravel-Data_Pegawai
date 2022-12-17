<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('instansi_id');
            $table->foreign('instansi_id')->references('id')->on('instansis')->onDelete('cascade');
            $table->string('nip');
            $table->string('nama_lengkap');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->string('ttl');
            $table->text('alamat');
            $table->date('tgll');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('no_hp');
            $table->string('npwp');
            $table->string('jabatan');
            $table->string('tempat_tugas')->nullable();
            $table->string('gol');
            $table->string('eselon');
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
        Schema::dropIfExists('pegawais');
    }
}
