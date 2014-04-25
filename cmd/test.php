<?php 

function isPrime($test){
	$sr = ceil(sqrt($test));
	for ($check=3; $check <= $sr ; $check = $check + 2) { 
		if ($test % $check == 0) {
			return false;
		}
	}
	return true;
}
$x = 331618151217133020331712151816133;
if (isPrime($x)) {
	echo $x.' is Prime'.PHP_EOL;
}else{
	echo $x.' is NOT Prime'.PHP_EOL;
}


 ?>