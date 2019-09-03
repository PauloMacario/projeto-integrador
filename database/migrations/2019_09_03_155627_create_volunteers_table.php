<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->unsignedBigInteger('id_ong');
            $table->unsignedBigInteger('id_user');
            $table->integer('permission_level');
            $table->foreign('id_ong')->references('id')->on('ongs');
            $table->foreign('id_user')->references('id')->on('users');
            $table->primary(['id_ong', 'id_user']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volunteers');
    }
}
