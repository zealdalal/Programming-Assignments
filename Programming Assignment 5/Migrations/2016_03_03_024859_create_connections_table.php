<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connections', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('from_member_id')->unsigned();
			$table->foreign('from_member_id')->references('id')->on('members');
			$table->integer('to_member_id')->unsigned();
			$table->foreign('to_member_id')->references('id')->on('members');
            $table->boolean('active');
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
        Schema::drop('connections');
    }
}
