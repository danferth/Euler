<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/assets/js/prism.js"></script>
<link rel="stylesheet" href="/assets/css/prism.css">
<a href="/index.php">Home</a>

<h2>problem 9</h2>
<h4>Special Pythagorean triplet</h4>
<hr>
<p>A Pythagorean triplet is a set of three natural numbers, <i>a &lt; b &lt; c</i>, for which,</p>
<p><i>a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup></i></p>
<p>For example, 3<sup>2</sup> + 4<sup>2</sup> = 9 + 16 = 25 = 5<sup>2</sup>.</p>
<p>There exists exactly one Pythagorean triplet for which <i>a + b + c = 1000</i>.</p>
<p>Find the product abc.</p>

<hr><!-- *****CODE***** -->

<code class="language-php"><pre class="line-numbers">
function problem_9(){
	$time = new time();
	$limit = 1000;

	for ($a=1; $a < $limit; $a++) { 
		for ($b=1; $b < $limit; $b++) {
			$c2 = pow($a, 2) + pow($b, 2);
			$c = sqrt($c2);
			if ($a < $b && $b < $c) {
				if ($a + $b + $c == 1000) {
					echo $a . ' ' . $b . ' ' . $c . PHP_EOL;
					echo pow($a,2) . ' + ' . pow($b,2) . ' = ' . pow($c,2) . PHP_EOL;
					echo $a * $b * $c . PHP_EOL;
				}
			}
		}
	}


	$time->end();

}

problem_9();
</pre></code>

