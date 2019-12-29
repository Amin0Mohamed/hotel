<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoomsTable extends Migration {

	public function up()
	{
		Schema::create('rooms', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->integer('max_adults');
			$table->integer('max_children');
			$table->integer('beds');
			$table->integer('bathrooms');
			$table->decimal('room_area');
			$table->decimal('price');
            $table->bigInteger('hotel_id')->unsigned();
            $table->bigInteger('room_type_id')->unsigned();
			$table->foreign('hotel_id')->references('id')->on('hotels')
            ->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('room_type_id')->references('id')->on('room_types')
            ->onUpdate('cascade')->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::drop('rooms');
	}
}
