<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id_image',true);
            $table->string('nom',50);
            $table->string('lien',250);
            $table->longText('description');
            $table->integer('aime');
            $table->date('post_date');
            $table->string('coord_lat', 50);
            $table->string('coord_lon', 50);
            $table->integer('id')->unsigned();
            $table->integer('id_lieu')->unsigned();
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
        Schema::dropIfExists('images');
    }
}
