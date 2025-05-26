<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('vuelos', function (Blueprint $table) {
        $table->id();
        $table->string('destino');
        $table->string('aerolinea');
        $table->string('imagen'); // nombre del archivo en /public/images
        $table->string('duracion');
        $table->decimal('precio', 8, 2);
        $table->string('clase');
        $table->date('fecha_salida');
        $table->text('descripcion')->nullable();
        $table->string('continente');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelos');
    }
};
