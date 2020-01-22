<!doctype html>
<html lang-"en">
<head>
<meta charset="utf-8">
<title>Clause Links</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style type="text/css">
   body { background-color:#fff; }
</style>

</head>
<body>
<body style="background-color:#f8f9fa;">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<div class="container" style="margin-top3:30px">
	
  <?php
    //turn debugging on
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    //connect to database
    include "Fdbconn.php";
    $mysqli=Fdbconn();

    //query the database for a list of rows and paras
    $query = "SELECT ID,Para,Data1 FROM B1v12019 WHERE Data1 LIKE '%paragraph%' ";
    $result = $mysqli->query($query);

    //call csvsend to print results to csv
    //include "Fcsvsend.php";
    //Fcsvsend($result);
    
    //output search to page
    while ($item = mysqli_fetch_array($result))
    {

     echo $item['ID'];
     echo ',';
     echo $item['Para'];
     echo ',';
     echo $item['Data1'];
     echo '</br>';

    }
    
    //clean up
    $result -> free_result();
    mysqli_close($mysqli);
    ?>
</div>
</body>
</html>

