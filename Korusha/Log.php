<?php
namespace Korusha;

class Log extends \core\LogAbstract implements \core\LogInterface {
	public static function log($str) {
		self::Instance()->log[] = $str;
	}

	public function _write() {
		$d = new \DateTime();
		$date = $d->format("d.m.Y_TH.i.s.u");
		
		$pathToLog = __DIR__ . "/../log";
		if (!file_exists($pathToLog))
			mkdir($pathToLog);

		$file = fopen($pathToLog . "/$date.log", "w+");

		foreach($this->log as $val) {
			fwrite($file,  $val . "\n");
			echo $val . "\n";
		}
	}
	
	public static function write() {
		static::Instance()->_write();
	}
}
?>
