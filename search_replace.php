<?php

	function search_replace($str,$before,$after){
			
			

			//$arr=explode(' ',strtolower($str));
			$newArr=[];
			$myafter='';
			//return ucfirst($before);
			if($before[0]===strtoupper($before[0])){
				
				$after=ucfirst($after);
			}

			//$newStr=str_replace($before, $after, $str);
			return str_replace($before, $after, $str);

				
			
	}
	print_r(search_replace('A quick borwn for Jumped over the lazy dog','Jumped','leaped'));

?>