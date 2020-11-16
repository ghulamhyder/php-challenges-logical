<?php
//0,1,1,2,3,5,8,13,21,34

	function fibo($num){

		$arr=[];
		$sum=0;
	
		for($i=0; $i<$num; $i++){

			$arr[]=myfibo($i);

		}
		//array_shift($arr);
		//return $arr;
		foreach ($arr as $val) {
			if($val % 2 !=0){
				$sum +=$val;
			}
		}
		return $sum;
}

	function myfibo($whichNum){
		$num1=1;
		$num2=0;
		$temp;
		$i=0;
		while($i < $whichNum){
			$temp=$num1;
			$num1=$num1 + $num2;
			$num2=$temp;
			$i++;
		}
		return $num2;
		

	}
	echo "<pre>";
	print_r(fibo(6));
	echo "</pre>";

?>