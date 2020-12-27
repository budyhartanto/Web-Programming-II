<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class BukuModel extends CI_Model {
	public $table = 'buku';
		
	public function show($limit, $offset)
	{
		$query = $this->db->get($this->table, $limit, $offset);
		$data['object'] = $query->result();
		$data['array'] = $query->result_array();
		$data['count'] = $query->num_rows();
		return $data;
	}

	public function single($id)
	{
		$query = $this->db->get_where($this->table, array('id' => $id));
		$data['object'] = $query->row();
		$data['array'] = $query->row_array();
		$data['count'] = $query->num_rows();
		return $data;
	}

	public function insert($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function update($data, $id)
	{
		return $this->db->update($this->table, $data, array('id' => $id));
	}

	public function delete($id)
	{
		return $this->db->delete($this->table, array('id' => $id));
	}
}

/* End of file BukuModel.php */
/* Location: ./application/models/BukuModel.php */
?>