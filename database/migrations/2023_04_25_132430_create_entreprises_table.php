<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('adresse')->nullable();
            $table->string('ville')->nullable();
            $table->string('email')->nullable();
            $table->string('code_postal')->nullable();
            $table->string('num_telephone')->nullable();
            $table->string('url_photo')->nullable();
            $table->string('url_logo')->nullable();
            $table->string('site_web')->nullable();
            $table->string('description')->default('');
            //$table->foreignId('categorie_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('entreprises');
    }
}
