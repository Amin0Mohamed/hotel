<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHotelsTable extends Migration {

	public function up()
	{
		Schema::create('hotels', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('title', 250);
			$table->string('address', 250);
			$table->text('description')->nullable();
			$table->string('phone', 20)->nullable();
			$table->string('name', 20)->nullable();
			$table->string('mobile', 20)->nullable();
			$table->string('email', 250);
            $table->decimal('lattitude', 10,8);
            $table->decimal('longitude', 10,8);
			$table->integer('rating');
			$table->integer('rate_count');
            $table->bigInteger('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')
                ->onUpdate('cascade')->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::drop('hotels');
	}
}
