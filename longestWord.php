<?php

	function longestWord($str){

		$arr=explode(' ', $str);
		$check=0;
		$ltr='';
		
		/*$x=array_map(function($str)use(&$check){
				echo $str;
			
			if(sizeof($strSize) > $check){

				$check=sizeof($strSize);
			return $check;

			}
			
		}, $arr);*/
		foreach ($arr as $val) {
			$strSize=str_split($val);
			if(sizeof($strSize) > $check){

				$check=sizeof($strSize);
				$ltr=join('',$strSize);

			
		}
		
		

	}
	return $ltr;
}

	echo (longestWord('the quick brown fox jumped over the lazy dog'));


?>