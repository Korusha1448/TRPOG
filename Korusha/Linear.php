<?php
namespace Korusha;
// �������� ��������� a*x + b = 0

class Linear{
	protected $x;
	function ur($a, $b){
		if ($a != 0) {
			$x = -1*$b/$a;
			$this->x = $x;
			return array($x);
		}
		throw new KorushaException("equation does not exist");	
	}
}
?>