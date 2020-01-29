<?php
/*This function takes an array of clauses and returns a modified version with the visibility indexes switched according to ruleset */

//turn debugging on
ini_set('display_errors', 'On');
error_reporting(E_ALL);



function clausefilter($clauselist, $input){
//echo '</br>'.$input;

	global $csv;
	$count=0;
	
	// INCLUDES //
	
	//check if input is 'all', if so, cycle through the clauselist untill the ruleset inlcude column [6] ($csv) matches the 'all' string and then substitute the visibilty field for on(1)
		if ($input == 'all'){ 
			foreach ($clauselist as $item){			
				if ($csv[$count][6] == 'all')
					{
						$clauselist[$count]['vis'] = 1;
					}	//end if		 				 
				$count++; 				
			} //end foreach
			$count=0;	
		} //end if
		
		
	
	//check if input is domestic, if so, cycle through the clauselist untill the ruleset ($csv) matches the 'dwelling' string and then substitute the visibilty field for on (1)
		if ($input == 'dwellinghouse'){ 
			foreach ($clauselist as $item){			
				if ($csv[$count][7] == 'dwelling')
					{
						$clauselist[$count]['vis'] = 1;
					}	//end if		 				 
				$count++; 				
			} //end foreach
			$count=0;	
		} //end if
		
		if ($input == 'flats'){ 
				foreach ($clauselist as $item){				
				if ($csv[$count][8] == 'flats')
					{
						$clauselist[$count]['vis'] = 1;
					}	//end if		 				 
				$count++; 				
			} //end foreach
			$count=0;			
		} //end if

		if ($input == 'mixed'){ 
				foreach ($clauselist as $item){				
				if ($csv[$count][9] == 'mixed')
					{
						$clauselist[$count]['vis'] = 1;
					}	//end if		 				 
				$count++; 				
			} //end foreach
			$count=0;			
		} //end if
		
		if ($input == 'sheltered'){ 
				foreach ($clauselist as $item){				
				if ($csv[$count][10] == 'sheltered')
					{
						$clauselist[$count]['vis'] = 1;
					}	//end if		 				 
				$count++; 				
			} //end foreach
			$count=0;			
		} //end if
		
		if ($input == 'historic'){ 
				foreach ($clauselist as $item){				
				if ($csv[$count][11] == 'historic')
					{
						$clauselist[$count]['vis'] = 1;
					}	//end if		 				 
				$count++; 				
			} //end foreach
			$count=0;			
		} //end if	
		
		if ($input == 'largedwelling'){ 
				foreach ($clauselist as $item){				
				if ($csv[$count][12] == 'largedwelling')
					{
						$clauselist[$count]['vis'] = 1;
					}	//end if		 				 
				$count++; 				
			} //end foreach
			$count=0;			
		} //end if	
		
		if ($input == 'extension'){ 
				foreach ($clauselist as $item){				
				if ($csv[$count][13] == 'extension')
					{
						$clauselist[$count]['vis'] = 1;
					}	//end if		 				 
				$count++; 				
			} //end foreach
			$count=0;			
		} //end if
		
		if ($input == 'student'){ 
				foreach ($clauselist as $item){				
				if ($csv[$count][15] == 'student')
					{
						$clauselist[$count]['vis'] = 1;
					}	//end if		 				 
				$count++; 				
			} //end foreach
			$count=0;			
		} //end if
		
		if ($input == 'loft'){ 
				foreach ($clauselist as $item){				
				if ($csv[$count][16] == 'loft')
					{
						$clauselist[$count]['vis'] = 1;
					}	//end if		 				 
				$count++; 				
			} //end foreach
			$count=0;			
		} //end if
		
		if ($input == 'garage'){ 
				foreach ($clauselist as $item){				
				if ($csv[$count][17] == 'garage')
					{
						$clauselist[$count]['vis'] = 1;
					}	//end if		 				 
				$count++; 				
			} //end foreach
			$count=0;			
		} //end if

return $clauselist;	
	
} //end function

?>
