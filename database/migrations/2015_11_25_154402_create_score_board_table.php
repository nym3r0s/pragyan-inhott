<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoreBoardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score_board', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first');
            $table->string('second');
            $table->string('third');
            $table->timestamp('updated_at');
        });

        for($i=0; $i<8; ++$i)
        DB::table('score_board')->insert(array(
                'first' => '0',
                'second' => '0',
                'third' => '0'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('score_board');
    }
}
