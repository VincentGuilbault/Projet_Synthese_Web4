<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMrcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mrcs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description')->nullable(); // nullable = peut être null
            $table->text('texte')->nullable();
            $table->text('region')->nullable();
            $table->text('carte')->nullable();
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
        Schema::dropIfExists('mrcs');
    }
}
