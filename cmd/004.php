<?php
include dirname('../').'./assets/class/time.php';
/*
*************problem 4****************

A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.

Find the largest palindrome made from the product of two 3-digit numbers.

*/

function is_palindromic($str){
	//get str length
	$length = strlen($str);
	//is length even?
	if ($length % 2 == 0) {
		//find mid point
		$half_length = $length/2;
		//split string down the middle and put into array
		$str_array = str_split($str , $half_length);
		//reverse second half of string
		$rev_str = strrev($str_array['1']);
		$str_a = $str_array['0'];
		$str_b = $rev_str;
		//are the two halves equal
		if ($str_a === $str_b) {
			return true;
		}else{
			return false;
		}
	}
}

function three_digit(){
	$time = new time();
	$num1 = 100;
	$num2 = 100;
	$result = array();
	while ($num1 <= 999) {
		for ($num2 = 100; $num2 <= 999; $num2++) { 
			$test = $num1 * $num2;
			if (is_palindromic($test)) {
				array_push($result, $test);
			}
		}
		$num1++;
	}
	$limit = count($result)-1;
	$count = 1;
	$compare = $result['0'];
	while ($count <= $limit) {
		if ($compare < $result[$count]) {
			$compare = $result[$count];
		}
		$count++;
	}

	echo $compare . PHP_EOL;

	$time->end();
}

three_digit();
 ?>