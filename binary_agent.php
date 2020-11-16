<?php

	function myBinary($num){

		
		$num2=$num;

		$i=1;
		$result=null;
		while($num !=0){

			$remi=$num%2;
			$num=floor($num/2);
			$result += ($remi * $i);
			$i *= 10;
		}
		return $result;
	}
	echo myBinary(13);



?>