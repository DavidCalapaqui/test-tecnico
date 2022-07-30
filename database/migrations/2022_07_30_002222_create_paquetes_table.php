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
        Schema::create('paquete', function (Blueprint $table) {
            $table->id();
            $table->float('peso');
            $table->string('origen');
            $table->string('destino');
            $table->float('valor');
            $table->integer('bultos');
            $table->timestamps();


            $table->foreignId('id_cliente')
                  ->constrained('cliente')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paquete');
    }
};
