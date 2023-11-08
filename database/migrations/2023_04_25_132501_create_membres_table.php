<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membres', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->char('etablissement', 255)->nullable();
            $table->integer('adresse_civique')->nullable();
            $table->text('rue')->nullable();
            $table->text('ville')->nullable();
            $table->text('num_telephone')->nullable();
            $table->text('code_postal')->nullable();
            $table->text('site_web')->nullable();
            $table->text('email');
            $table->string('mot_de_passe');
            $table->text('commodite')->nullable();
            $table->char('type', 255)->nullable();
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
        Schema::dropIfExists('membres');
    }
}
