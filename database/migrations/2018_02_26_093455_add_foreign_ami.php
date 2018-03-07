<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignAmi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('amis', function (Blueprint $table) {
            $table->foreign('id')->references('id')->on('users');
            $table->foreign('id_n')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('amis', function (Blueprint $table) {
            $table->dropForeign('amis_id_foreign');
            $table->dropForeign('amis_id_n_foreign');
        });
    }
}