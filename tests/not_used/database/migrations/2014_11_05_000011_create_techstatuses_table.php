<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTechStatusesTable extends Migration
{

	public function __construct()
	{
		// Get the prefix
		$this->prefix = Config::get('shisan.shisan_db.prefix', '');
	}

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->prefix . 'tech_statuses', function(Blueprint $table) {

			$table->engine = 'InnoDB';
			$table->increments('id');

			$table->string('name')->nullable();
			$table->string('description')->nullable();


			$table->softDeletes();
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
		Schema::drop($this->prefix . 'tech_statuses');
	}

}
