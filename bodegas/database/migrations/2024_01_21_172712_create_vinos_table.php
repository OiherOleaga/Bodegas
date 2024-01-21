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
Schema::create('vinos', function (Blueprint $table) {
$table->id();
$table->string('nombre');
$table->string('descripcion');
$table->string('año');
$table->string('alcohol');
$table->string('tipo de vino');


});
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vinos');
    }
};
