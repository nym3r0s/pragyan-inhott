<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Registrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->string('rollno');
            $table->string('name');
            $table->string('hostel');
            $table->string('grabToSmash');
            $table->string('pragyanDesignChallenge');
            $table->string('yaconai');
            $table->string('electrolution');
            $table->string('bytecodeJunior');
            $table->string('theUltimateManager');
            $table->string('waterRocket');
            $table->string('trollphy');
        
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
