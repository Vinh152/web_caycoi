<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietgiohangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietgiohang', function (Blueprint $table) {
            $table->bigInteger("ID_giohang")->unsigned();
            $table->bigInteger("ID_sanpham")->unsigned();
            $table->string("ten_san_pham",255);
            $table->string("gia_san_pham",255);
            $table->integer("so_luong");
            $table->integer("tong_cong");
            $table->foreign("ID_giohang")->references("ID_giohang")->on('giohang')->onDelete('cascade');
            $table->foreign("ID_sanpham")->references("ID_sanpham")->on('sanpham')->onDelete('cascade');
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
        Schema::dropIfExists('chitietgiohang');
    }
}
