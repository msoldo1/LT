<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacunsArtikalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('racuns_artikals', function (Blueprint $table) {
            $table->unsignedInteger('racun_id');
            $table->unsignedInteger('artikal_id');
            $table->decimal('kolicina',13, 4);

            //FOREIGN KEY CONSTRAINTS
            $table->foreign('racun_id')->references('id')->on('racuns')->onDelete('cascade');
            $table->foreign('artikal_id')->references('id')->on('artikals')->onDelete('cascade');
            //SETTING THE PRIMARY KEYS
            $table->primary(['racun_id','artikal_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('racuns_artikals');
    }
}
