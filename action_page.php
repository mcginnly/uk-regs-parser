<!doctype html>
<html lang-"en">

<head>
<meta charset="utf-8">
<title>RULES</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style type="text/css">
   body { background-color:#fff; }
</style>

</head>

<body style="background-color:#f8f9fa;">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<div class="container" style="margin-top3:30px">
<div class="card">
  <div class="card-body">
	<?php
	  ini_set('display_errors', 'On');
	  error_reporting(E_ALL);
	
	include "Fgetclause.php";
	include "Fparaprint.php";  
	include "Fdiagramprint.php";
	include "Fparadrop.php";
	include "Fdbconn.php";
	include "FIDnext.php";
	include "Fclausefilter.php";
	include "Fcsvread.php";
  
	//define report function
	function fpostinput($inputval){
	
	if (isset($_POST[$inputval]) != NULL) 		
		{echo '<div class="row"><div class="col-3">'.$inputval.': </div><div class="col-1">'.htmlspecialchars($_POST[$inputval]).'</div></div>';
			//var_dump($_POST["$inputval"])
			;} 				
		else {echo '<div class="row"><div class="col-3">'.$inputval.': </div><div class="col-1">off</div></div>';}
	}//end function def
	
	//print current state of inputs
	fpostinput('domestic');
	fpostinput('mixed');
	fpostinput('flats');
	fpostinput('student');
	fpostinput('largedwelling');
	fpostinput('storeyarea');
	fpostinput('sheltered');
	fpostinput('extension');
	fpostinput('material');
	fpostinput('loft');
	echo '<hr>';
	fpostinput('storeyno');
	fpostinput('storeynoabove45');
	fpostinput('height');
	fpostinput('storeyheight');
	echo '<hr>';
	fpostinput('lift');
	fpostinput('basement');
	fpostinput('mechvent');
	fpostinput('balcony');
	fpostinput('gallery');
	fpostinput('exstairs');
	fpostinput('garage');


	
	//connect to database
	$mysqli=Fdbconn();

	//get a full list of clauses
	$clauselist=Fparadrop();
	
	//pass clauselist through the visfilter
	//$clauselist=Fclausefilter($clauselist);

	///read exclude file 
	 // Set path to CSV file
	$csvFile = 'csv/excludes.csv';
	$csv = Fcsvread($csvFile);


	//if an input has been checked, pass the clauselist through the visfilter
	if (isset($_POST['domestic']) != NULL) { $clauselist=clausefilter($clauselist, 'domestic');}
	if (isset($_POST['mixed']) != NULL) { $clauselist=clausefilter($clauselist, 'mixed');}
	if (isset($_POST['flats']) != NULL) { $clauselist=clausefilter($clauselist, 'flats');}
	if (isset($_POST['student']) != NULL){ $clauselist=clausefilter($clauselist, 'student');}
	if (isset($_POST['largedwelling']) != NULL) { $clauselist=clausefilter($clauselist, 'largedwelling');}
	if (isset($_POST['sheltered']) != NULL) { $clauselist=clausefilter($clauselist, 'sheltered');}
	if (isset($_POST['extension']) != NULL){ $clauselist=clausefilter($clauselist, 'extension');}
	if (isset($_POST['material']) != NULL) { $clauselist=clausefilter($clauselist, 'material');}
	if (isset($_POST['loft']) != NULL) { $clauselist=clausefilter($clauselist, 'loft');}
	if (isset($_POST['lift']) != NULL) { $clauselist=clausefilter($clauselist, 'lift');}
	if (isset($_POST['basement']) != NULL) { $clauselist=clausefilter($clauselist, 'basement');}
	if (isset($_POST['mechvent']) != NULL) { $clauselist=clausefilter($clauselist, 'mechvent');}
	if (isset($_POST['balcony']) != NULL) { $clauselist=clausefilter($clauselist, 'balcony');}
	if (isset($_POST['gallery']) != NULL) { $clauselist=clausefilter($clauselist, 'gallery');}
	if (isset($_POST['exstairs']) != NULL) { $clauselist=clausefilter($clauselist, 'exstairs');}
	if (isset($_POST['balcony']) != NULL) { $clauselist=clausefilter($clauselist, 'balcony');}
	if (isset($_POST['garage']) != NULL) { $clauselist=clausefilter($clauselist, 'garage');}
	
	
	
	//set data
	$Storeyarea =  $_POST['storeyarea'];
	$storeyno = $_POST['storeyno'];
	$storeynoabove45 =  $_POST['storeynoabove45'];
	$height =  $_POST['height'];
	$storeyheight =  $_POST['storeyheight'];	
	
	foreach ($clauselist as $item)
    {
	  //check the visibility flag
	  if ($item['vis'] == 1){
		//get the data payload for the next clause number
		$clause=Fgetclause($item);
      
		//tag clause with clausenumber (so webpage can be indexed)
		echo '<p id="'.$item['para'].'"></p>';
        
		//print the payload if vis flag is 1  
      
		Fparaprint ($clause);  
	  } //end if     
    }


	?>
	</div> <!-- end card -->
</div>


</div>
</body>
</html>
