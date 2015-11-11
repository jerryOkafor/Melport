<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupervisorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
        //create the technicains table
      Schema::create('supervisors',function(Blueprint $table){
	$table->increments('id');
	$table->string('name',50);
	$table->integer('division');
      });
      
      $faker = Faker\Factory::create();
      $limit = 5;
      for($i=0; $i<$limit; $i++)
	{
	DB::table('supervisors')->insert([
	   //,
	    'name' =>$faker->name(),
	    'division' =>$faker->numberBetween(0, 2)
	]);
	}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //drop the table
      Schema::drop('supervisors');
    }
}
