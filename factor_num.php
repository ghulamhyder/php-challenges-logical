<?php

	function factor_num($num){

		/*$fact=1;
		for($i=1; $i<=$num; $i++){

			$fact=$fact * $i;
		}
		return $fact;*/
		$arr=[];


		for($i=1;$i<=$num; $i++){
			$arr[]=$i;
		}
		
		$x=array_reduce($arr, function($a,$b){

			return $a * $b;
		},1);
		return $x;

	}

	echo factor_num(5);

	//1*2*3*4*5

?>