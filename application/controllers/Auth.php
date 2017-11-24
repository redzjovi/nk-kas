<?php  if(! defined ('BASEPATH'))exit('no direct script access allowed');
	
class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
	}

	public function index()
	{
		$this->load->view('Auth/login');
	}

	public function login()
	{
		$username = $this->input->post('username', true);
		$password = md5($this->input->post('password', true));
		$result = $this->Auth_model->verify($username, $password);
		if ($result > 0) {
			$data = array(
				'logged_in' => true,
				'username' => $result['username'],
				'level'  => $result['level']
			);
			$this->session->set_userdata('login',$data);
			redirect(site_url($data,'kas/index/'));
		} else {
			redirect(site_url('auth'));
		}
	}

	public function register()
	{
		$this->load->view('auth/register');
	}

	public function do_register()
	{
		$username = $this->input->post('username', true);
		$password = md5($this->input->post('password', true));
		$level = $this->input->post('level', true);
		$nama = $this->input->post('nama', true);

		$data = array (
			'username' => $username,
			'password' => $password,
			'level'	   => $level,
			'nama'	   => $nama
		);
			$result = $this->Auth_model->insert($data);
			if ($result > 0) {
				redirect(site_url('auth/login'));
			} 
			else {
				redirect (site_url('auth/register')); 
			}
	}

	public function logout(){
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('auth/index');
	}

}