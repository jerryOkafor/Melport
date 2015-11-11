<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create the location table
      Schema::create('locations', function(Blueprint $table){
	$table->increments('id');
	$table->string('new_house_address');
	$table->string('street_name');
	$table->string('occupants_name');
	$table->string('occupants_number');
	$table->timestamps();
      });
      
      $faker = Faker\Factory::create();
      $limit=5;
      for($i=0; $i<$limit; $i++)
	{
	DB::table('locations')->insert([
	    //,
	    'new_house_address' =>$faker->address(),
	    'street_name' => $faker->address(),
	    'occupants_name' => $faker->name(),
	    'occupants_number' => $faker->phoneNumber()
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
        //drop the table here
      Schem::drop('locations');
    }
}
