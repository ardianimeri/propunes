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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('role');
            $table->string('surname')->nullable();
            $table->string('address')->nullable();
            $table->text('bio')->nullable();
            $table->integer('number')->nullable();
            $table->integer('age')->nullable();
            $table->string('location')->nullable();
            $table->string('profession')->nullable();
            $table->string('grade')->nullable();
            $table->integer('experience')->nullable();
            $table->integer('projects')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
