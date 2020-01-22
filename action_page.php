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
	//  ini_set('display_errors', 'On');
	//  error_reporting(E_ALL);


	if (isset($_POST['domestic']) != NULL) 		{echo '<div class="row"><div class="col-sm">Domestic: </div>'.htmlspecialchars($_POST['domestic']).'<br>';} 			
	else {echo '
		<div class="row">
			<div class="col-sm">
				Domestic: 
			</div>
			<div class="col-sm">
				off<br>
			</div><div class="col-sm"></div><div class="col-sm"></div>
		</div>';}
	if (isset($_POST['mixed']) != NULL) 		{echo 'Mixed: '.htmlspecialchars($_POST['mixed']).'<br>';} 					else {echo 'Mixed: off<br>';}
	if (isset($_POST['flats']) != NULL) 		{echo 'flats: '.htmlspecialchars($_POST['flats']).'<br>';} 					else {echo 'flats: off<br>';}
	if (isset($_POST['extension']) != NULL) 	{echo 'Extension: '.htmlspecialchars($_POST['extension']).'<br>';} 			else {echo 'Extension: off<br>';}
	if (isset($_POST['student']) != NULL) 		{echo 'Student: '.htmlspecialchars($_POST['student']).'<br>';} 				else {echo 'Student: off<br>';}
	if (isset($_POST['lift']) != NULL) 			{echo 'Lift: '.htmlspecialchars($_POST['lift']).'<br>';} 					else {echo 'Lift: off<br>';}
	if (isset($_POST['sheltered']) != NULL) 	{echo 'Sheltered: '.htmlspecialchars($_POST['sheltered']).'<br>';} 			else {echo 'Sheltered: off<br>';}
	if (isset($_POST['storeyheight']) != NULL) 	{echo 'Storey height: '.htmlspecialchars($_POST['storeyheight']).'<br>';} 	else {echo 'Storey Height: off<br>';}


	include "Fpara-dropd-list.php";
    $clauselist=Fparadrop();
	var_dump($clauslist);
	?>
	</div>
</div>


</div>
</body>
</html>
