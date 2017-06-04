<?php
include 'objek.php';
//inc.gith->afrizaldea;
class pengunjung extends objek{
	
	private $komen;

	public function setkomen ($komen){
		$this->komen = $komen;
	}
	public function getkomen() {
		return $this->komen;
	}
}
?>