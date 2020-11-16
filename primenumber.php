<?php 

	
function chunkey_monkey($arr,$size){

	$newArr=[];

	$count=0;

	while($count <sizeof($arr)){

		array_push($newArr, array_slice($arr, $count,$count+$size));
		$count +=$size;

	}
	return $newArr;

	//return array_slice($arr, 2);
	//echo sizeof($arr);

	
}
echo "<pre>";
print_r(chunkey_monkey([1,2,3,4],2));
echo "</pre>";

?>