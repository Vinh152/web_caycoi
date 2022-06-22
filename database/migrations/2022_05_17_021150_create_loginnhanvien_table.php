<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginnhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loginnhanvien', function (Blueprint $table) {
            $table->bigInteger("ID_nhanvien")->unsigned();
            $table->string("email",255);
            $table->string("password",255);
            $table->string("cau_hoi",255);
            $table->string("tra_loi",255);
            $table->foreign("ID_nhanvien")->references("ID_nhanvien")->on('nhanvien')->onDelete('cascade');
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
        Schema::dropIfExists('loginnhanvien');
    }
}
