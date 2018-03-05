<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreationTableAmiForeignOnIdUtilisateur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ami', function (Blueprint $table) {
            $table->dateTime('anniversaire_amitie');
            $table->integer('id')->unsigned();
            $table->integer('id_users')->unsigned();
            $table->primary(array('id','id_users'));
            $table->timestamp('date_creation');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ami');
    }
}
