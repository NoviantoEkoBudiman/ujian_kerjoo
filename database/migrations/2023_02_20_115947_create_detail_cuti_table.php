<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailCutiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_cuti', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cuti_id'); 
            $table->foreign('cuti_id')->references('id')->on('cuti');
            $table->date('tanggal_cuti');
            $table->enum('status',['0','1','2'])->comment('0 = diproses, 1 = diterima, 2 = ditolak');
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
        Schema::dropIfExists('detail_cuti');
    }
}
