Learn From Euler Project
========================

I found somewhere in [StackOverflow](http://stackoverflow.com/) a person asking for advice on becoming a better programmer, and the response was *"go solve [Euler project](http://projecteuler.net/) problems, they will help you think outside the box"*.  So here is my repo of my attempts at solving the problems in `php`.

###Execution of problems

Since starting this exercise I ran into a problem that required a lot of computations and the browser kept timing out.  Instead of using things like `set_time_limit()` and `flush()`, which would take away from just code that ran to solve the problem I decided to run all code from the command line *(using linux)*.

###The Time Class

In getting the command line to output the time it took for the program to complete I created a class to reuse in the problems.  I take a time stamp with `time()` at the beginning of the function and end then apply some basic math to output the time in sec, min, or hours.  The project Euler site states that the problems should take less than a minute to run but one of mine took 11 hours. This is because i am not as math savvy as I should be, hence taking on this exercise.


####Time Class

````
class time{
	
	
	private $start;
	private $end;
	private $total;
	private $total_min;
	private $minutes;
	private $hours;
	
	function __construct(){
		$this->start = time();
		return $this->start;
	}
	
	function end(){

		$this->end = time();
	
		$this->total = $this->end - $this->start;
		if ($this->total < 60) {
		echo 'time to complete: '.$this->total.' seconds'.PHP_EOL;
		}
		if ($this->total > 61 && $this->total < 3599) {
			$this->total_min = $this->total/60;
			echo 'time to complete: '.$this->total_min.' minutes'.PHP_EOL;
		}
		if ($this->total > 3599) {
			$this->minutes = $this->total/60;
			$this->hours = $this->minutes/60;
			echo 'time to complete: '.$this->hours.' hours'.PHP_EOL;
		}
	
	}
}
````

####Template for each problem starts like so:

````
//include class file
include dirname('../').'./assets/class/time.php';


function problem_x(){
//create time object and grab unix time stamp
$time = new time();

//code for problem.....

//grab ending time stamp and output time
$time->end();
}


//run function
problem_x();
````

###Progress so far

- problem 001
- problem 002
- problem 003
- problem 004
- problem 005
- problem 006
- problem 007