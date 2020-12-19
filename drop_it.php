function drop_it($arr1,$func1){

		while(!$func1($arr1[0])){
			array_shift($arr1);
		}
		return $arr1;
	}


print_r(drop_it([0,1,0,1],function($n1){

	return $n1===1;

}));
