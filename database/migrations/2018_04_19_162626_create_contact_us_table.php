<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactUsTable extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('contactus', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name', 320);
    $table->string('email', 320);
    $table->text('message', 280);
    $table->string('address', 320);
    $table->string('address2', 320);
    $table->string('city');
    $table->string('state', 320);
    $table->string('zip', 45);
    $table->string('reason', 20);
    $table->string('homes', 20); 
    $table->timestamps(); });
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::drop("contactus");
}
}
