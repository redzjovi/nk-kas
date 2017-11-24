<?php if (! defined('BASEPATH'))exit('no direct script access allowed');

class Kas_model extends CI_Model
{

	private $table = 'kas';
	
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
		$this->db->from('kas');
		return $this->db->get();
    }
	
	function select_by_id($id_kas)
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('id_kas', $id_kas);
		return $this->db->get();
	}

	function update_kas($id_kas, $data)
	{
		$this->db->where('id_kas', $id_kas);
		$this->db->update('kas', $data); 
	}

	function delete_kas($id_kas)
	{
		$this->db->where('id_kas', $id_kas);
		$this->db->delete('kas'); 
	}
}


?>