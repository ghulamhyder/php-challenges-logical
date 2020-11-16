<?php

function palidrome($str){
		$str=str_split($str);
		//return join('',array_slice($str,-1));
		
		if(sizeof($str) <=1){
			return true;
		}
		elseif($str[0]==join('',array_slice($str,-1))){
			
			return palidrome(join('',array_slice($str,1,-1)));
		}
		else{
			
			return 'false';
		}

}

echo (palidrome('hello'));

?>