<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKucingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kucing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 25);
            $table->string('gender', 6);
            $table->string('ras', 30);
            $table->string('umur', 3);
            $table->string('warna', 30);
            $table->string('bulu', 30);
            $table->string('foto', 100)->nullable;
            $table->text('deskirpsi');
            $table->integer('idUser');
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
        Schema::dropIfExists('kucing');
    }
}
