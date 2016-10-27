<?php

function FactorialArray($a){
	$factorial=1;
	$b = array();

	if(is_array($a)){
		foreach($a as $num){
			if(is_int($num)){
				for($i=$num; $i>1; $i--){
					$factorial=$factorial * $i;
					
					}
					
					array_push($b, $factorial);
					$factorial=1;

			}else{
				echo $num." No és un número<br/>";
			}
		}

		print_r($b);
}else if(!is_array($a)){
	echo "No és un array";
	return false;
}


}
//$a = 5;
$a = array(4,8,5,"ff");
echo "Factorial de l'Array";
echo print_r($a)."<br/>";
FactorialArray($a);




/*Erik Perea i Bofill */

?>



