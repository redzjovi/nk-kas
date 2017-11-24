<?php if (! defined('BASEPATH'))exit('no direct script access allowed');

class Barang_model extends CI_Model
{

	private $table = 'inventory';
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function store($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->affected_rows();
	}
	
	public function cek($nama_barang, $jumlah, $harga)
	{
		$this->db->select('nama_barang');
		$this->db->from($this->table);
		$this->db->where('nama_barang', $nama_barang);
		$this->db->where('jumlah', $jumlah);
		$this->db->where('harga', $harga);
		return $this->db->get()->row_array();
	}
	
	public function get_all()
	{
		return $this->db->get($this->table)->result();
		//return $this->db->get($this->table)->result();
    }
	
}


?>