<?php
   namespace src;

   class TreatApiReturn{

      public function treat($array)
      {
      	$ar = [];
      	foreach ($array as $key => $value) 
      	{

      		if( !empty($key) AND $value != "" )
      		{
      			// array_push($ar[$key], $ar[$value]);	
      			$ar[$key] = $value;
      		}
		
      		
      	}
      	return $ar;
      }
   }
   // "libre_franklinregular", Arial, Helvetica, sans-serif