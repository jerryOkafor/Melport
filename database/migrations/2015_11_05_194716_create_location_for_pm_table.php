<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationForPmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create the location for pme table here
      Schema::create('locations_for_pm',function(Blueprint $table){
	$table->increments('id');
	$table->string('location',50);
	$table->integer('numberOfHouses');
	$table->timestamps();
      });
      
      $faker = Faker\Factory::create();
      $limit=5;
      for($i=0; $i<$limit; $i++)
	{
	DB::table('locations_for_pm')->insert([
	    //,	    
	    'location' => $faker->text(),
	    'numberOfHouses' => $faker->text()
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
        //drop the locations for cm table here
      Schema::drop('locations_for_pm');
    }
}
