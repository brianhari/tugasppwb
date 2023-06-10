<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //ketika membuat tabel
    {
        Schema::create('mhs', function (Blueprint $table) {
            $table->bigInteger('nim')->primary(); //membuat default untuk atribut
            $table->string('nama', 50);
            $table->string('gender', 30);
            $table->string('jurusan', 50);
            $table->string('bidang_minat', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //ketika membuat 
    {
        Schema::dropIfExists('mhs');
    }
}
