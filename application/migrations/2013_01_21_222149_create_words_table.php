<?php

class Create_Words_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('words', function($table){
			$table->increments('id');
			$table->string('word');
			$table->date('date');
			$table->integer('entries');
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('words');
	}

}