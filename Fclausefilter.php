<?php
/*This function takes an array of clauses and returns a modified version with the visibility indexes switched according to ruleset */

//turn debugging on
ini_set('display_errors', 'On');
error_reporting(E_ALL);



function clausefilter($clauselist, $input){

	global $csv;
	$count=0;
	
	//check if input is domestic
		if ($input == 'domestic'){ 
	//if so, cycle through the clauselist untill the ruleset ($csv) matches the 'dwelling' string and then substitute the visibilty field for off (0)
			foreach ($clauselist as $item){
				
				if ($csv[$count][1] == 'dwelling')
					{
						$clauselist[$count]['vis'] = 0;
					}	//end if		 
				 
				$count++; 
				
			} //end foreach
			$count=0;
			var_dump($clauselist);
		} //end if
		
		if ($input == 'flats'){ 
			echo 'flats ready to be passed clauselist';
				foreach ($clauselist as $item){
				
				if ($csv[$count][1] == 'flats')
					{
						$clauselist[$count]['vis'] = 0;
					}	//end if		 
				 
				$count++; 
				
			} //end foreach
			$count=0;
			var_dump($clauselist);
		} //end if

//var_dump($clauselist);
return $clauselist;	
	
} //end function

?>
