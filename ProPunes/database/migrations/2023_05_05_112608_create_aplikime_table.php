<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('aplikimet', function (Blueprint $table) {
            $table->id('ID_P');
            $table->string('Titulli');
            $table->text('Pershkrimi');
            $table->string('Kategoria');
            $table->string('Lokacioni');
            $table->string('Orari');
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }





    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aplikimet');
    }

};
