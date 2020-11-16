<?php

$roman_num=[

	'M'=>1000,
	'CM'=>900,
	'D'=>500,
	'CD'=>400,
	'C'=>100,
	'XC'=>90,
	'L'=>50,
	'XL'=>40,
	'X'=>10,
	'IX'=>9,
	'V'=>5,
	'IV'=>4,
	'I'=>1
];

	function myRomanNum($roman_num,$num){
		$result='';

	foreach ($roman_num as $key => $val) {

		if($num >= $val){

			$result .= str_repeat($key, floor($num/$val));
			$num = $num - ($val * (floor($num/$val)));
		}
		
	}
	return $result;

}

echo myRomanNum($roman_num,500);



?>