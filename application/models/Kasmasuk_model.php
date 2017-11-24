<?php if (! defined('BASEPATH'))exit('no direct script access allowed');

class Kas_model extends CI_Model
{

	private $table = 'kas_masuk';
	
	public function __construct()
	{
		parent::__construct();
		// 
	}
	
	public function add($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->affected_rows();
	}
	
	public function get_all()
	{
		$this->db->select('*');
		$this->db->from('kas_masuk');
		return $this->db->get();
    }
	
	function select_by_id($id_kas)
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('id_kasmasuk', $id_kasmasuk);
		return $this->db->get();
	}

	function update_kas($id_kas, $data)
	{
		$this->db->where('id_kasmasuk', $id_kasmasuk);
		$this->db->update('kas_masuk', $data); 
	}

	function delete_kas($id_kas)
	{
		$this->db->where('id_kasmasuk', $id_kasmasuk);
		$this->db->delete('kas_masuk'); 
	}
}


?>