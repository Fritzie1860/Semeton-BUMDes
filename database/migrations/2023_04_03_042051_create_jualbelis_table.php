<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJualbelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jualbelis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_transaksi');
            $table->foreignId('id_barang');
            $table->foreignId('harga');
            $table->foreignId('kuantitas');
            $table->foreignId('total');
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
        Schema::dropIfExists('jualbelis');
    }
}
