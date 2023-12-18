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
        Schema::create('perpus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('nim');
            $table->string('tanggal_lahir');
            $table->integer('angkatan');
            $table->string('no_telepon');
            $table->string('email');
            $table->string('alamat');
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
        Schema::dropIfExists('perpus');
    }
};
