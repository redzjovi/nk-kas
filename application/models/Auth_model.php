<?php if (! defined('BASEPATH'))exit('no direct script access allowed');

class Auth_model extends CI_Model
{

	private $table = 'user';
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function insert($data)
	{
		$this->db->insert($this->table,$data);
		return $this->db->affected_rows();
	}
	
	public function verify($username,$password){
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get()->row_array();
	}

	public function select_all(){
    $this->db->select('*');
    $this->db->from($this->table);
    return $this->db->get();
  	}

  	//public function insert_e($data){
    //$this->db->insert($this->table, $data);
  	//}

  	public function select_by_id($id_user){
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->where('id_user', $id_user);
    return $this->db->get();
  	}

  	public function update($id_user, $data){
    $this->db->where('id_user', $id_user);
    $this->db->update('user', $data);
  	}

  	public function delete($id_user){
    $this->db->where('id_user', $id);
    $this->db->delete($this->table);
  	}
	
}

?>