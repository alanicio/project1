<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pedidos', function (Blueprint $table){
            $table->string('comentarios_privados')->nullable();
            $table->string('comentarios_publicos')->nullable();
            $table->string('envio_a_cargo_de')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('pedidos', function (Blueprint $table){
            $table->dropColumn('comentarios_privados')->nullable();
            $table->dropColumn('comentarios_publicos')->nullable();
            $table->dropColumn('envio_a_cargo_de')->nullable();

        });
    }
}
