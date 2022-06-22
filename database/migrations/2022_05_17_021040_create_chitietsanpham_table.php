<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietsanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietsanpham', function (Blueprint $table) {
            $table->bigInteger("ID_sanpham")->unsigned();
            $table->string("anh1",255);
            $table->string("anh2",255);
            $table->string("anh3",255);
            $table->string("anh4",255);
            $table->integer("so_luong");
            $table->text("mo_ta");
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
        Schema::dropIfExists('chitietsanpham');
    }
}
