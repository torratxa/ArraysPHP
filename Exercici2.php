<?php

function multidimensional($num){
	$columnes=$num;
	$files=$num;
	$j=0;
	$array = array();
	while($j < $files) {
    $i = 0;
  	array_push($array, $i);
        while($i < $columnes) {
            echo "|$j,$i|";
            
            $i++;
        }
        echo "<br/>";
    
    $j++;


	}
	
 
 

}
	


multidimensional(4);




/*Erik Perea i Bofill */

?>



