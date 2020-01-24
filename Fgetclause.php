 <?php
 //takes a clause number as input and outputs the whole clause as an array. Also adds an ID key to the html 
  function Fgetclause($clause){

    //load Fparareturn
    if (!function_exists('Fparareturn')){
    include "Fparareturn.php";
    }

    //load FIDnext
    if (!function_exists('FIDnext')){
    include "FIDnext.php";
    }

    //load Fclausereturn
    if (!function_exists('Fclausereturn')){
    include "Fclausereturn.php";
    }


    //get clause start and end id and then retrieve the payload as an array.
        $id = Fparareturn($clause['para']);
        $nextid = FIDnext($id);
        $payload = Fclausereturn($id,$nextid);
        
    return $payload;
    }
 ?>
