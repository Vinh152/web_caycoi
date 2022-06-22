<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiohangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giohang', function (Blueprint $table) {
            $table->bigIncrements("ID_giohang");
            $table->string("ho",255);
            $table->string("ten",255);
            $table->string("quoc_gia",255);
            $table->string("thanh_pho",255);
            $table->string("dia_diem",255);
            $table->string("sdt",255);
            $table->string("email",255);
            $table->string("ghi_chu",255);
            $table->integer("tong_don_hang");
            $table->string("trang_thai",255);
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
        Schema::dropIfExists('giohang');
    }
}
