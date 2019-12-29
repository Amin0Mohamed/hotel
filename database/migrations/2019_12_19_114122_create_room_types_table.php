<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoomTypesTable extends Migration {

	public function up()
	{
		Schema::create('room_types', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('type_name');
			$table->string('description');
		});
	}

	public function down()
	{
		Schema::drop('room_types');
	}
}
