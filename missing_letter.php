<?php

function miss_ltr($str){
	$arr=str_split($str);
	
	$arr2=[];
	$miss=[];

	foreach ($arr as $val) {
		$arr2[]=ord($val);
	}
	
	for($i=0;$i<sizeof($arr2); $i++){

			if(($arr2[$i+1]-$arr2[$i]) > 1){
				$miss[]=$arr2[$i]+1;
			}
	}
	return chr(implode('', $miss));
	
		
}

print_r(miss_ltr('abcdeg'));

?>