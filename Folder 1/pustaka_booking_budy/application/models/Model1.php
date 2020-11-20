<?php
class Model1 extends CI_Model
{

	public $nilai1, $nilai2, $hasil;


	Public function jumlah($nil1=nul1, $nil2=nul11)
	{
		$this->nilai1 = $nil1;
		$this->nilai2 = $nil2;
		$this->hasil = $this->nilai1 + $this->nilai2;
		return $this->hasil;
	}
}