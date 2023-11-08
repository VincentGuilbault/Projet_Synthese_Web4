<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForfaitObjetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forfait_offre', function (Blueprint $table) {
            $table->id();
            $table->foreignId('forfait_id')->constrained()->cascadeOnDelete();
            $table->integer('offrable_id');
            $table->string('offrable_type');
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
        Schema::dropIfExists('forfait_offre');
    }
}
