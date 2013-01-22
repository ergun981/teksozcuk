<?php

class Create_Entries_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entries', function($table){
			$table->increments('id');
			$table->integer('word_id');
			$table->text('entry');
			$table->integer('author_id')->null();
			$table->string('author_name');
			$table->string('author_email');
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
		Schema::drop('entries');
	}

}