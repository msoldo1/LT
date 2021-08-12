<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCipkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cipkas', function (Blueprint $table) {
            $table->id();
            $table->string('nazivCipke');
            $table->decimal('cijenaCipke',10, 4);
            $table->decimal('trenutnoCipke', 13, 4)->nullable();
            $table->decimal('unesenoCipke', 13, 4)->nullable();
            $table->decimal('potrosenoCipke', 13, 4)->nullable();
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
        Schema::dropIfExists('cipkas');
    }
}
