<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmss', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->string('address', 320);
            $table->string('cost', 45);
            $table->string('description', 2000);
            $table->datetime('datecreated');
            $table->datetime('dateedited')->nullable();
            $table->datetime('datedeleted')->nullable();
            $table->string('email', 320);
            $table->string('picroute', 200);
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
        Schema::dropIfExists('cmss');
    }
}
