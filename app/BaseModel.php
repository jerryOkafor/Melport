<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    //here we define our basic functions
  
  //this function is used to select query
  public function selectQuery($sql_stmt)
    {
    return DB::select($sql_stmt);
    }
    
  //executes sql query string
  public function sqlStatement($sql_stmt)
    {
    DB::statement($sql_stmt);
    }
}
