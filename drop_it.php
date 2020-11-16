<?php 

	function drop_it($arr,$func){

		while(!$func($arr[0])){
			echo "hello";
			array_shift($arr);
		}
		return $arr;
	}

	print_r(drop_it([0,1,0,1],function($n){ return $n === 1;}));

?>