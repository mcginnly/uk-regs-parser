<!doctype html>
<html lang-"en">
<head>
<meta charset="utf-8">
<title>Bregs Index</title>
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
   <div class="row">
      <ul>
         <h1>Approved Document B1 Abridged</h1>
         <h3>Main Files:</h3>
         <li><a href="/index.php">Index.php</a>  -  This page (returns full contents of database up to column Data3)</li>
         <li><a href="/ClauseReport.php">ClauseReport.php</a>  -  A database navigator.</li>
         <li><a href="/Clauseprint.php">Clauseprint.php</a>  -  Assembles nearly the full document by first establishing a list of clauses and then using functions to return each clause contents. Something like this method will be used for the ultimate output, by passing an exlude/include list to a function. Also tests the Fdiagramprint function.</li>
         <li><a href="/input.php">input.php</a>  -  Basic input forms (incomplete)</li>
         <li><a href="/action_page.php">action_page.php</a>  -  (incomplete) Currently just displays the input values obtained from input.php. Will eventually cross reference the 'rules' file to determine an exlude/include list of clause numbers to display</li>        
         <li><a href="/OutputCSV.php">Output.CSV.php</a>  -  Sends a database query to a function and prints the results to a CSV file</li>
      </ul>
      <ul>
         <h3>Utilities</h3>
         <p>I have written a few basic utilities, mostly to do specific queries of the database:</p>
         <li><a href="/Util_testindex.php">Util_testindex.php</a>  -  Prints a list of db ID keys against Para numbers</li>
         <li><a href="/Util_testpara.php">Util_testpara.php</a>  -  Prints various ID key data for a given Para number (and tests code for an 'input' box)</li>
         <li><a href="/Util_testsection.php">Util_testsection.php></a>  -  Returns a var_dump of an array that gives ID keys for the start of each section in the document</li>
         <li><a href="/Util_NewRow.php">Util_NewRow.php</a>  -  USE WITH CAUTION!!! Adds a new row in the database at the input key number</li>
         <li><a href="/Util_info.php">Util_info.php</a>  -  Standard php installation info</li>
         <li><a href="/Util_clauselinkreport.php">Util_clauselinkreport.php</a>  -  Unfinished. Currently returns a search of clauses for the term 'paragraph' to help automate the 'rules' file. TODO: write code to parse this file to determine the clause number of each entry against the paragraph numbers that are found.</li>
      </ul>
   </div>
 
<table class="table">
 <thead>
 <tr>
 <th scope="col">Page</th>
 <th scope="col">Para</th>
 <th scope="col">Data1</th>
 <th scope="col">Data2</th>
 <th scope="col">Data3</th>
 </tr>
 </thead>

 <tbody>
 <tr>
   <?php
   //connect to database
   include "Fdbconn.php";
   $mysqli=Fdbconn();
   
   //select all from db
   $query = "SELECT * FROM B1v12019";
   $result = $mysqli->query($query);



 while($test = mysqli_fetch_array($result))
 {
 $id = $test['ID'];
 echo"<td>".$test['Page']."</td>";
 echo"<td>".$test['Para']."</td>";
 echo"<td>".$test['Data1']."</td>";
 echo"<td>".$test['Data2']."</td>";
 echo"<td>".$test['Data3']."</td>";
 echo "</tr>";
 }
 mysqli_close($conn);
 ?>
</table>

</div>
</body>
</html>
