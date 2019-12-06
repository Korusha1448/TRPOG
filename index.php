Class A{
}
Class B  extends A{
	public a;
	public b;
	public c;
	public d;
	function__construct ($a, $b, $c, $d) {
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
		$this->d = $d;
	}
}
$a=new B (new A(), new A(), new A(), new A());	
