<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ServerConnections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serverconnections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('organization_name');
            $table->string('usernamesql');
            $table->string('passwordsql')->nullable();
            $table->ipAddress('ipadress');
            $table->string('databasename');       
            $table->string('typeofclient');                 
            $table->string('created_by');
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
        Schema::dropIfExists('serverconnections');

    }
}
