<?php

	function repeat_str1($str,$num){

		if($num < 0)
			return " ";
		
	 	$x=str_repeat($str,$num);
	 	return $x;

	}
	echo repeat_str1('abc',-2);

?>