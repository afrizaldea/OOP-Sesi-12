<?php
class objek {
	private $nama;
	private $namabelakang;
	
	public function setnama ($nama){
		$this->nama = $nama;
	}
	public function getnama() {
		return $this->nama;
	}
	public function setnamabelakang ($namabelakang){
		$this->namabelakang = $namabelakang;
	}
	public function getnamabelakang() {
		return $this->namabelakang;
	}
}
?>