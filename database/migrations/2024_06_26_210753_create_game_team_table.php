<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('game_team', function (Blueprint $table) {
            $table->id();

            $table->foreignId('game_id')->constrained()->onDelete('cascade');
            $table->foreignId('team_id')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('game_team');
    }
};
