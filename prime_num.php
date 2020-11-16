<?php
//1,2,3,5,7,11,13,17,19
	function prime_num($num){

		$arr=[];
		for($i=0;$i<$num;$i++){

			if(isPrime($i)){
				$arr[]=$i;
			}

		}
		
		/*$x=array_reduce($arr,function($a,$b){
			return $a+$b;
		},0);
		return $x;*/
		return $arr;
		
	}
	function isPrime($n){
		for($j=2;$j<$n; $j++){

			if($n%$j==0){
				return 0;
			}
		}
		return 1;
	}


	print_r(prime_num(20));

?>