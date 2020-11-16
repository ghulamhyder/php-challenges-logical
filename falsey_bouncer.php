<?php

	function falsey_val($arr){

		return array_filter($arr);

	}

	print_r(falsey_val([7,"ate","",false,9,null,true]));


?>