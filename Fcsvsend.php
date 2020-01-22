
	
  <?php

  function Fcsvsend($results){
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="sample.csv"');


    //open csv file for output
    $fp = fopen('php://output', 'wb');
	
    while ($item = mysqli_fetch_array($results))
    {

     echo $item['ID'];
     echo ',';
     echo $item['Para'];
     echo ',';
     echo $item['Data1'];
     echo "\r";

    }
    fclose($fp);
    }//end function
    ?>



