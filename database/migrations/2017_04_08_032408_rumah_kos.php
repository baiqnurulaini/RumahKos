<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RumahKos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('rumah_kos', function (Blueprint $table) {
            $table->increments('id', 3);
            $table->string('nama_kos', 5);
            $table->string('jenis', 5);
            $table->float('harga', 10);
            $table->float('jarak', 10);
            $table->float('luas', 10);
            $table->double('lat', 20);
            $table->double('lng', 20);
            $table->string('foto_kos', 50);
            $table->string('sisa_kamar', 10);
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
        Schema::dropIfExists('rumah_kos');
    }
}
