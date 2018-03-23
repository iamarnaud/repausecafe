<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id',true)->unsigned();
            $table->string('nom', 50);
            $table->string('prenom', 50);
            $table->string('genre');
            $table->string('email', 70)->unique();
            $table->string('password',255);
            $table->string('avatar')->default('default.jpg');
            $table->longText('description');

            $table->boolean('en_ligne')->nullable();

            $table->date('date_naiss');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
