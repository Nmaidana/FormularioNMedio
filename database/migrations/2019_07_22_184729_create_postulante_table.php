<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreatePostulanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulante', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ci');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('sexo');
            $table->string('nacionalidad');
            $table->date('fecha_nac');
            $table->integer('telefono')->unique();
            $table->string('vivienda');
            $table->string('profesion');
            $table->string('lugar_trabajo');
            $table->integer('nflia');
            $table->integer('napte');
            $table->integer('ingresof');
            $table->string('lugar_vivienda');
            $table->integer('monto_apagar');
            //$table->string('email')->unique();
           // $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postulante');
    }
}
