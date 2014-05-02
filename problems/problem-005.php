<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/assets/js/prism.js"></script>
<link rel="stylesheet" href="/assets/css/prism.css">
<a href="/index.php">Home</a>

<h2>problem 5</h2>
<h4>Smallest multiple</h4>
<hr>

<p>2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.</p>

<p>What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?</p>

<hr><!-- *****CODE***** -->

<code class="language-php"><pre class="line-numbers">
function smallest_multiple(){
	$time = new time();
	$test = 20;
	$answer = '';
	$count = 0;

	while ($count < 20) {
		for ($i=1; $i <= 20; $i++) { 
			if (fmod($test, $i) == 0) {
				$count++;
			}
		}
		if ($count < 20) {
			$count = 0;
			$test = $test + 2;
		}elseif ($count == 20){
			$answer = $test;
		}
	}
	echo $answer . PHP_EOL;
	$time->end();
}

smallest_multiple();
</pre></code>

