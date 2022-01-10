<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuterbitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukuterbit', function (Blueprint $table) {
            $table->id('id_buku');
            $table->string('judul_buku');
            $table->string('penulis');
            $table->enum('jenis_buku', ['novel', 'senandika', 'puisi', 'cerpen', 'non-fiksi']);
            $table->year('tahun_terbit');
            $table->text('sinopsis');
            $table->string('gambar');
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
        Schema::dropIfExists('bukuterbit');
    }
}
