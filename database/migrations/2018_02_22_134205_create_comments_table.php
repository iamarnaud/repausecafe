<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            //$table->increments('id_com',true);
            $table->date('date_com');
            $table->string('commentaire',250);
            $table->string('com_eph',250);
            $table->integer('id')->unsigned();
            $table->integer('id_image')->unsigned();
            $table->timestamps();
            $table->primary(array('id','id_image'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
