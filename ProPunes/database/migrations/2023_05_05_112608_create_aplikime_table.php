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
