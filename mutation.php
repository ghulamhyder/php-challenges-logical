<?php

	function mutation($arr){
		//strpos()
		$target=strtolower($arr[0]);
		$word=str_split(strtolower($arr[1]));
		//$word=explode(" ",strtolower($arr[1]));
		//echo $target;
		

		for($i=0; $i<sizeof($word); $i++){
			//echo $word[$i]."<br>";
			if(strpos($target,$word[$i]) === false){
				return 'false';
			}
		}
		return true;


	}

	echo (mutation(["Aline","LIne"]));

?>