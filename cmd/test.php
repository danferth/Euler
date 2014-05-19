<?php
include dirname('../').'./assets/class/time.php';


$test = array(
	array('a','b','c','d','e','f'),
	array('g','h','i','j','k','l'),
	array('m','n','o','p','q','r'),
	array('s','t','u','v','w','x'),
	array('y','z','A','B','C','D')
	);


echo $test['0']['3'].$test['0']['0'].$test['2']['1'].PHP_EOL;



function test(){
$time = new time();

$time->end();
}

//test();




 ?>
