<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->bigIncrements("ID_sanpham");
            $table->bigInteger("ID_danhmuc")->unsigned();
            $table->string("ten_san_pham",255);
            $table->string("anh",255);
            $table->integer("gia_tien");
            $table->foreign("ID_danhmuc")->references('ID_danhmuc')->on("danhmuc")->onDelete("cascade");
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
        Schema::dropIfExists('sanpham');
    }
}
