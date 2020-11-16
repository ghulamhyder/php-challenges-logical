<?php

function large_num($arr){

	$largeNum=[];

	foreach($arr as $i) { 
			$current_largest=0;

	for($j=0; $j<sizeof($i);$j++){

			if($i[$j] > $current_largest){
				$current_largest=$i[$j];
			}

	}
	$largeNum[]=$current_largest;

	}
	return $largeNum;

}
print_r(large_num([[4,5,1,3],[13,27,18,26],[32,35,37,39],[1000,1001,857,1]]));

?>