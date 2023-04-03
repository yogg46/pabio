<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->string('idChat')->primary();
            $table->string('idUser')->constrained()
                ->onUpdate('cascade');
            $table->string('username', 25);
            $table->text('isi');
            $table->dateTime('tanggal');
            $table->string('balas', 255);
            $table->foreign('idUser')->references('idUser')->on('users');
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
        Schema::dropIfExists('chats');
    }
};
