<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platnos', function (Blueprint $table) {
            $table->id();
            $table->string('nazivPlatna');
            $table->decimal('cijenaPlatna',10, 4);
            $table->decimal('trenutnoPlatna', 13, 4)->nullable();
            $table->decimal('unesenoPlatna', 13, 4)->nullable();
            $table->decimal('potrosenoPlatna', 13, 4)->nullable();
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
        Schema::dropIfExists('platnos');
    }
}
