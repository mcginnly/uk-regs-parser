 <?php 
  function Ftableprint($table){
 //turn debugging on
 
  ini_set('display_errors', 'On');
  error_reporting(E_ALL);
    $count=NULL;
    $test = mysqli_fetch_array($table);
    echo'<div class="rounded" style="background-color:#fff;">';
    echo'<div class="table-responsive" > ';
    echo'<table class="table">';
    echo'<thead class="thead-light">';
    echo'<tr>';
    echo'<th scope="col"><h5>Table '.$test['TableNo'].' | '.$test['Data1'].'</h5></th>';
    echo'<th scope="col"></th>';
    echo'<th scope="col"></th>';
    echo'<th scope="col"></th>';
    echo'</tr>';
    echo'</thead>';
    echo'  <tbody>';

        //turn debugging on
         ini_set('display_errors', 'On');
         error_reporting(E_ALL);
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

    //Iterate through array and display on webpage 
    while($test = mysqli_fetch_array($table))
    {
    
    echo"<td>".$test['Data1']."</td>";
    echo"<td>".$test['Data2']."</td>";
    echo"<td>".$test['Data3']."</td>";

    echo '</tr>';
    $count=$count+1;
    }
    echo'</tbody>';
    echo'</table>';
    echo'</div> '; //<!-- end div table --> 
    echo'</div> '; //<!-- end row -->
  }
 ?>
