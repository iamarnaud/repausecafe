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
            $table->string('password',15);
            $table->text('url_img_profil');
            $table->longText('description');
            $table->string('tel', 15);
            $table->boolean('en_ligne')->nullable();
            $table->boolean('notification')->default(0);
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
