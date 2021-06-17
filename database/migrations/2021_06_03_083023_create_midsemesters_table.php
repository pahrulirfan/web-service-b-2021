<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMidsemestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('midsemesters', function (Blueprint $table) {
            $table->bigIncrements('id_043');
            $table->string('kolom_nim', 10);
            $table->string('kolom_nama', 50);
            $table->integer('kolom_umur');
            $table->text('kolom_alamat');
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
        Schema::dropIfExists('midsemesters');
    }
}
