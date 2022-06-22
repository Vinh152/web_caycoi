<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhgiasanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danhgiasanpham', function (Blueprint $table) {
            $table->bigInteger("ID_sanpham")->unsigned();
            $table->string("ten_khach_hang",255);
            $table->string("email",255);
            $table->string("nhan_xet",255);
            $table->integer("sao");
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
        Schema::dropIfExists('danhgiasanpham');
    }
}
