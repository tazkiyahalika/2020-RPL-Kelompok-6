<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('infraction', function (Blueprint $table) {
        //nama table itu harus PLURAL
        Schema::create('infractions', function (Blueprint $table) {
            $table->id();
            // $table->string('name infraction');
            // kamu ngikutin tutorialnya siapa? kenapa  bikin nama fieldnya pake spasi?
            $table->string('name_infraction');
            $table->integer('point');
            $table->string('code');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infraction');
    }
}
