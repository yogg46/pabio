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
            $table->text('isi');
            $table->date('tanggal');
            $table->string('sender_id');
            $table->string('receiver_id');
            $table->string('is_admin')->default('salah');
            $table->foreign('sender_id')->references('idUser')->on('users')->onDelete('cascade');
            $table->foreign('receiver_id')->references('idUser')->on('users')->onDelete('cascade');
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
