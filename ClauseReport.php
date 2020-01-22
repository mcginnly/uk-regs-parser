<!doctype html>
<html lang-"en">
<head>
<meta charset="utf-8">
<title>CLAUSE RETURN 2</title>
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

  
<?php 
session_start();

 //turn debugging on
  ini_set('display_errors', 'On');
  error_reporting(E_ALL);
         
  //connect to database
  include "Fdbconn.php";
  $mysqli=Fdbconn();
         
  // initiate ID number if there isn't a persistent id variable from a previous session
  if (is_null($_SESSION["ID"]))
    {
      $_SESSION["ID"]='4'; $nextid='23'; //key values of first clause.

    } 
  
  $id=$_SESSION["ID"];
  
  //initiate nextid previd
  include "FIDnext.php";
  
  $nextid=FIDnext($_SESSION["ID"]);
  
  //initiate count
  $count= NULL;
  
?> 

<form action="" method="post"  style="padding:1em 1em 1em 0em;">
    <select name="clauseno">
        <option selected=$id>Choose clause</option>
  <?php
        //turn debugging on
         ini_set('display_errors', 'On');
         error_reporting(E_ALL);

                
         include "Fpara-dropd-list.php";
         $clauselist=Fparadrop();

         foreach ($clauselist as $item){
         ?>
         
         <option value="<?php echo strtolower($item['para']); ?>"><?php echo $item['para']; ?></option> 
         <?php
         }
         
         ?>
     

    </select>
    <input type="submit" name="submit" value="Submit">
    <input type="submit" name="previous" value="Previous">
    <input type="submit" name="next" value="Next">
</form>


<div class="rounded" style="background-color:#fff;">

<div class="table-responsive" > 

 <table class="table">
  <thead class="thead-dark">
  <tr>
  <th scope="col">Section</th>
  <th scope="col">Para</th>
  <th scope="col">Data1</th>
  <th scope="col">Data2</th>
  <th scope="col">Data3</th>
  </tr>
  </thead>

  <tbody>
      <?php 
  

        //turn debugging on
         ini_set('display_errors', 'On');
         error_reporting(E_ALL);
    
        //if SUBMIT button is pressed get droplist query and retrieve start ID and next ID
        if (isset($_POST['submit']))
        {

          //call Fparareturn function and receive ID of row that corresponds to para no.
          include "Fparareturn.php";
          $clauseno = htmlentities($_POST['clauseno']);
          $id = Fparareturn($clauseno);

          //call FIDnext function and receive next ID in ID/para data
          $nextid = FIDnext($id);
        }
        
         // If NEXT  button is pressed iterate $id and $idnext to next value in $clauselist
        if (isset($_POST['next']))
        {
          //global $mysqli;
          $id=FIDnext($_SESSION["ID"]);
          $nextid=FIDnext($id);
        }
        
        // If PREVIOUS  button is pressed deiterate $id and $idnext to previous value in $clauselist
        if (isset($_POST['previous']))
        {
          include "FIDprev.php";
          $nextid=$_SESSION["ID"]; 
          $id=FIDprev($_SESSION["ID"]); 
          $_SESSION["ID"]=$id;       
          
          //idnext=FIDnext($id); //check this - doesn't seem to be iterating back with the $id after FIDprev call. maybe have to call FID previous again.
          
        }
        
        //call Fclausereturn to receive array object of fields between start ID and next ID number
        include "Fclausereturn.php";
        $clause = Fclausereturn($id,$nextid);
        
        //if this is the first data row of the table ($count=null) then make it bold.    
      if (is_null($count)) {
        echo '<tr style="font-weight:800;">';
       }
      else {
        echo '<tr>';
        $count=1;
        echo $count;
        echo 'normal';
      }
      
    //Iterate through array and display on webpage (should move this to separate function eventually)
    while($test = mysqli_fetch_array($clause))
    {
    echo"<td>".$test['Section']."</td>";
    echo"<td>".$test['Para']."</td>";
    echo"<td>".$test['Data1']."</td>";
    echo"<td>".$test['Data2']."</td>";
    echo"<td>".$test['Data3']."</td>";

    echo "</tr>";
    $count=$count+1;
    }

    $_SESSION["ID"]=$id; //let id be persistent
    echo 'Session $id = '.$id.'<br>';
    mysqli_close($mysqli);
    ?>
   </table>
</div> <!-- end div table -->

</div>  <!-- end row -->

</div>
</body>
</html>
