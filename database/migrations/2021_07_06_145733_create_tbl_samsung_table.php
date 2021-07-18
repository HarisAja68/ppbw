<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSamsungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_samsung', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode',200)->default(null);
            $table->string('nama',200)->default(null);
            $table->string('foto',200)->default(null);
            $table->string('harga',200)->default(null);
            $table->string('stok',200)->default(null);
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
        Schema::dropIfExists('tbl_samsung');
    }
}
