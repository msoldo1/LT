<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGumasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gumas', function (Blueprint $table) {
            $table->id();
            $table->string('nazivGume');
            $table->decimal('cijenaGume',10, 4);
            $table->decimal('trenutnoGume', 13, 4)->nullable();
            $table->decimal('unesenoGume', 13, 4)->nullable();
            $table->decimal('potrosenoGume', 13, 4)->nullable();
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
        Schema::dropIfExists('gumas');
    }
}
