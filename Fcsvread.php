
	
  <?php

  function Fcsvread($csvFile){

    $file_handle =fopen($csvFile, 'r');
    while (!feof($file_handle)){
        $line_of_text[] = fgetcsv($file_handle, 1024);
    } //end while
    
    fclose($file_handle);
    return $line_of_text;
    } //end function


?>
 



