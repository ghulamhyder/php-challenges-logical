<?php

	function find_keepers($arr,$func){

		$arr=array_filter($arr,$func);

		return $arr;

	}

	print_r(find_keepers([1,2,3,4],function($n){if($n%2==0) return $n; }));

?>