<?php
class A {
	protected a;
	protected b;
	protected x;
	function __construct($a, $b){
		$this->a=$a;
		$this->b=$b;
	}
	function ur($a, $b){
		if ($a != 0) {
			$x = -1*$b/$a;
			$this->x = $x;
			return $x;
		}
		throw new KorushaException ("нет решения");	
	}
}
class B extends A{
	protected c;
	protected x2;
	function __construct($a, $b, $c){
		parent::__construct($a, $b);
		$this->c=$c;
	}
	protected function K($a, $b, $c) {
		$K = $b*$b - 4*$a*$c;
		return $K;
	}
	function ur2($a, $b, $c) {
		if($a == 0) {
			return $this->ur($a,$b);
		}
		$K = $this->K();
		if ($K > 0) {
			$x = (-1*$b + sqrt($K))/(2*$a);
			$x2 = (-1*$b - sqrt($K))/(2*$a);
			$this->x = $x;
			$this->x2 = $x2;
			return array($x, $x2);
		} else ($K = 0) {
			$x = (-1*$b)/(2*$a);
			$this->x = $x;
			return array($x);
		}
		throw new KorushaException ("нет решения");
	}
}
?>






















