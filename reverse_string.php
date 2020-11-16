<?php

	function rev_str($str){
		$arr=str_split($str);
		return implode("",array_reverse($arr));

	}

	print_r(rev_str('hello'));

?>