<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('suffix');
            $table->string('alias');
            $table->string('gender');
            $table->date('birthdate');
            $table->string('birthplace');
            $table->string('email')->unique();
            $table->string('contact');
            $table->string('citizenship');
            $table->string('civilstatus');
            $table->string('alivedordeceased');
            $table->string('voterstatus');
            $table->string('bloodtype');
            $table->string('pwd');
            $table->string('street');
            $table->string('nationalid');
            $table->string('remarks');
            $table->string('occupation');
            $table->string('officeaddress');
            $table->string('employer');
            $table->string('employercontact');
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
        Schema::dropIfExists('residents');
    }
};
