<?php
class latihan1 extends CI_Controller
{
	public function index()
	{
		echo "Selamat datang... Selamat Belajar di Web Programmimg...";
	}

	public function penjumlahan($nil1, $nil2)
	{
		$this->load->model('Model1');
		$hasil= $this->Model1->jumlah($nil1, $nil2);
		echo "Hasil penjumlahan dari".$nil1."+".$nil2."=".$hasil;
	}
}