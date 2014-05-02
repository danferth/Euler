<?php


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

?>