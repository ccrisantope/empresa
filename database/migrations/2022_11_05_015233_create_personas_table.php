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
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('nPerCodigo');
            $table->char('cPerApellido', 50)->nullable()->unique();
            $table->char('cPerNombre', 50)->nullable()->unique();
            $table->string('cPerDireccion', 100)->nullable();
            $table->date('dPerFecNac');
            $table->integer('nPerEdad');
            $table->decimal('nPerSueldo', 6, 2);
            $table->string('cPerRnd', 50);
            $table->char('cPerEstado', 1)->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('persona');
    }
};
