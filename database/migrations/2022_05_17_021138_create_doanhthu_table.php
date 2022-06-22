<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoanhthuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doanhthu', function (Blueprint $table) {
            $table->id("ID_doanhthu");
            $table->string("ten_doanh_thu",255);
            $table->integer("thang");
            $table->integer("nam");
            $table->integer("tong_doanh_thu");
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
        Schema::dropIfExists('doanhthu');
    }
}
