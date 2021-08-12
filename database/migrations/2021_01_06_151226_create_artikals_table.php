<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nazivArtikla');
            $table->decimal('cijenaArtikla', 10, 4);
            $table->decimal('kolicinaPlatna', 13, 4);
            $table->decimal('kolicinaGume', 13, 4);
            $table->decimal('kolicinaCipke', 13, 4);
            $table->decimal('trenutnoArtikal', 13, 4)->nullable();
            $table->decimal('unesenoArtikal', 13, 4)->nullable();
            $table->decimal('potrosenoArtikal', 13, 4)->nullable();
            $table->unsignedInteger('etiketa_id');
            $table->unsignedInteger('guma_id');
            $table->unsignedInteger('kutija_id');
            $table->unsignedInteger('platno_id');
            $table->unsignedInteger('cipka_id');
            $table->unsignedInteger('rad_id');
            $table->string('is_deleted');
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
        Schema::dropIfExists('artikals');
    }
}
