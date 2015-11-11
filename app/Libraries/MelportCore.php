<?php

namespace App\Libraries;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use App\CmReport;
use App\LocationsForPm;

class MelportCore{
  public static function getPmJobId(){
			$text = "MAN-";
			$data = \App\PmReport::all();
			$out = '';
			if($data->count())
			  {
			  $count = $data->count();
			  $counts = $count+1;
			   if(strlen($counts)==1)
				{
				$out.=$text.'000'.$counts;
				}else if(strlen($counts)==2)
				{
				$out.=$text.'00'.$counts;
				}else if(strlen($counts)==3)
				{
				$out.=$text.'0'.$counts;
				}else if(strlen($counts)==1)
				{
				$out.=$text.$counts;
				}
				
				return $out;
			
			  }else
			  {
			  return $out.'001';
			  }
			  
			  }//end function
//this function gets the number of houses for a particular location
public static function getNumberOfHouses($loc)
  {
    $location = LocationsForPm::where('location','like',$loc)->first();

       $number = $location->numberOfHouses;

   
    return $number;
  }
		
				
}
