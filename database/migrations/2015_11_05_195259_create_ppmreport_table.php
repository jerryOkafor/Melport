<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePpmreportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //starte creating the ppmreport here
      Schema::create('ppmreport', function(Blueprint $table){
	$table->increments('id');
	$table->integer('jobId');
	$table->string('location');
	$table->date('dateDone');
	$table->integer('callsGenerated')->nullable();
	$table->integer('callsCompleted')->nullable();
	$table->integer('noAccess')->nullable();
	$table->integer('noAccessResolved')->nullable();
	$table->integer('inspections')->nullable();
	$table->integer('housesServiced');
	$table->date('dateNext')->nullable();
	$table->string('engrRemark')->nullable();
	$table->boolean('tag')->default(0);
	$table->timestamps();
	
	});
	
      $faker = Faker\Factory::create();
      $limit=5;
      for($i=0; $i<$limit; $i++)
	{
	DB::table('ppmreport')->insert([
	    //,
	    'job_id' => $faker->text(),
	    'location' => $faker->address(),
	    'main_type' => $faker->text(),
	    'date_done' => $faker->date(),
	    'calls_generated' => $faker->text(),
	    'calls_completed' => $faker->text(),
	    'no_access_resolved' => $faker->text(),
	    'inspections' => $faker->text,
	    'houses_serviced' => $faker->text(),
	    'date_next' =>  $faker->date(),
	    'engr_remark' => $faker->text()
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
        //drop the cm report table
	Schema::drop('ppmrport');
    }
}
