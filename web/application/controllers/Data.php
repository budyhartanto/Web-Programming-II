<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function buku()
	{
		$data['ui_app_name'] = 'Data-Blog';
		$data['ui_title'] = 'Data-Blog';

		$data['ui_css'] = array('custom/css/default.css');
		$data['ui_js'] = array();

		// format penulisan: array('Kata|alamat_link|ikon', 'Kata|alamat_link|ikon', ...)
		$data['ui_sidebar_nav'] = array(
			'Data|book' => array(
				'Data Buku|book|' .site_url('data/buku'),
				'Data Siswa|face|' .site_url('data/siswa'),
			),
			'Transaksi|book' => array(
				'Data Buku|book|' .site_url('data/buku'),
				'Data Siswa|face|' .site_url('data/siswa'),
			),
			'Laporan|book' => array(
				'Data Buku|book|' .site_url('data/buku'),
				'Data Siswa|face|' .site_url('data/siswa'),
			)
		);
		$data['ui_sidebar_active'] = 'Data|Data Buku';

		$data['ui_top_nav'] = array(
			'Buku|book|' .site_url('data/buku'),
			'Pegawai|face|' .site_url('data/Pegawai')
		);
		$data['ui_top_nav_brand'] = 'Data Buku';
		$data['ui_top_nav_active'] = 'Buku';
		$this->load->view('data/buku/list', $data);
	}

	public function read_buku($mode = 'single', $ui = FALSE, $pagination = FALSE)
	{
		$this->load->model('BukuModel');

		// -----------------------------
		// Ambil semua data
		// -----------------------------
		if ($mode == 'show') {
			$this->db->start_cache();

			// Pagination
			$data['limit'] = $this->input->get('limit');
			if ($data['limit'] == '') {
				$data['limit'] = 0;
			}
			$data['page'] = $this->input->get('page');
			if ($data['page'] == '') {
				$data['page'] = 1;
			}
			$data['offset'] = ($data['page'] - 1) * $data['limit'];
			$this->db->stop_cache();

			// Pencarian Judul
			$cari = $this->input->get('cari');
			if ($cari != '') {
				$this->db->like('judul', $cari, 'BOTH');
			}

			// Pengurutan Data
			$order = $this->input->get('order');
			if ($order != '') {
				$this->db->order_by('id', $order);
			}

			// Pengambilan Data
			$data['data_buku'] = $this->BukuModel->show($data['limit'], $data['offset']);
			$this->db->flush_cache();

			// Route ke Pagination atau data
			if ($pagination != FALSE) {
				$data_buku_all = $this->BukuModel->show(0, 0);
				$pagination_data['limit'] = $data['limit'];
				$pagination_data['offset'] = $data['offset'];
				$pagination_data['page'] = $data['page'];
				$pagination_data['total_data'] = $data_buku_all['count'];
				$pagination_data['total_page'] = floor($pagination_data['total_data'] / $pagination_data['limit']);
				if (($pagination_data['total_data'] % $pagination_data['limit']) > 0) {
					$pagination_data['total_page']++;	
				}
				echo json_encode($pagination_data);
			}
			else {
				$this->load->view('data/buku/' .$ui, $data);
			}
		}

		// -------------------------------------
		// Ambil 1 Data
		// -------------------------------------
		else if ($mode == 'single') {
			$id = $this->input->get('id');
			$data = $this->BukuModel->single($id);
			echo json_encode($data);
		}
	}

	public function write_buku($mode)
	{
		$this->load->model('BukuModel');
		if ($mode == 'insert') {
			if ($this->input->is_ajax_request()) {
				$data = array(
					'judul' => $this->input->post('judul'),
					'pengarang' => $this->input->post('pengarang'),
					'penerbit' => $this->input->post('penerbit'),
					'tahun' => $this->input->post('tahun'),
					'jumlah_buku' => $this->input->post('jumlah_buku'),
					'jumlah_eksemplar' => $this->input->post('jumlah_eksemplar'),
					'kategori' => $this->input->post('kategori')
				);
				$result = $this->BukuModel->insert($data);
				echo json_encode($result);
			}
		}
		else if ($mode == 'update') {
			if ($this->input->is_ajax_request()) {
				$id = $this->input->post('id');
				$data = array(
					'judul' => $this->input->post('judul'),
					'pengarang' => $this->input->post('pengarang'),
					'penerbit' => $this->input->post('penerbit'),
					'tahun' => $this->input->post('tahun'),
					'jumlah_buku' => $this->input->post('jumlah_buku'),
					'jumlah_eksemplar' => $this->input->post('jumlah_eksemplar'),
					'kategori' => $this->input->post('kategori')
				);
				$result = $this->BukuModel->update($data, $id);
				echo json_encode($result);
			}
		}
		else if ($mode == 'delete') {
			if ($this->input->is_ajax_request()) {
				$id = $this->input->post('id');
				$result = $this->BukuModel->delete($id);
				echo json_encode($result);
			}
		}
	}

}

/* End of file Data.php */
/* Location: ./application/controllers/Data.php */
?>