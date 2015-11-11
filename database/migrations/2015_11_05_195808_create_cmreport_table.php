<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmreportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        //starte creating the ppmreport here
      Schema::create('cmreport', function(Blueprint $table){
	$table->increments('id');
	$table->integer('jobId')->unique()->unsigned();
	$table->string('location');
	$table->date('dateStarted');
	$table->time('timeStarted');
	$table->string('jobDescription');
	$table->string('planner');
	$table->string('technician');
	$table->string('supervisor');
	$table->string('faultCode')->nullable();
	$table->string('repairCode')->nullable();
	$table->string('rootCauseCode')->nullable();
	$table->date('dateEnded')->nullable();
	$table->time('timeEnded')->nullable();
	$table->string('engrRemark')->nullable();
	$table->boolean('tag')->default(0);
	$table->timestamps();
	
	});
	
      $faker = Faker\Factory::create();
      $limit=5;
      for($i=0; $i<$limit; $i++)
	{
	DB::table('cmreport')->insert([
	    //,
	    'job_id' => $faker->text(),
	    'location' => $faker->address(),
	    'main_type' => $faker->text(),
	    'date_done' => $faker->date(),
	    'time_started' => $faker->text(),
	    'job_description' => $faker->text(),
	    'planner' => $faker->text(),
	    'technician' => $faker->text,
	    'supervisor' => $faker->text(),
	    'report_code' =>  $faker->text(),
	    'fault_code' =>  $faker->text(),
	    'repair_code' =>  $faker->text(),
	    'root_cause_code' =>  $faker->text(),
	    'date_ended' =>  $faker->date(),
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
	Schema::drop('cmrport');
    }
}
