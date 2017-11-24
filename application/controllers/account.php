<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $session_data = $this->session->userdata('login');
    if (isset($session_data)){
        if ($session_data['logged_in']<>true){
          redirect(site_url('Auth'));
        }
    }else{
          redirect(site_url('Auth'));
        }
    $this->load->model('Auth_model','');
  }

  function index()
  {
    if ($this->session->userdata('login')) {
      $session_data = $this->session->userdata('login');
      $data['username'] = $session_data['username'];
      $data['level'] = $session_data['level'];
      $data['Account']=$this->Auth_model->select_all()->result();
      $this->load->view('account/list', $data);
    }
  }

  // public function add()
  // {
  //   $session_data = $this->session->userdata('login');
  //   $data['username'] = $session_data['username'];
  //   $data['level'] = $session_data['level'];
  //   $this->load->view('Account/Account_add', $data);
  // }

  // public function addp()
  // {
  //   $data['level'] = $this->input->post('level', TRUE);
  //   $data['username'] = $this->input->post('username', TRUE);
  //   $data['password'] = md5($this->input->post('password', TRUE));
  //   $data['nama'] = $this->input->post('nama', TRUE);
  //   // $data['nohp'] = $this->input->post('nohp', TRUE);
  //   // $data['kelamin'] = $this->input->post('kelamin', TRUE);
  //   // $data['alamat'] = $this->input->post('alamat', TRUE);
  //   $this->Account->insert_e($data);
  //   $this->session->set_flashdata('msg','Data Berhasil Masuk');
  //   redirect('Account/add');
  // }

  public function edit($id_user)
  {
    $session_data = $this->session->userdata('login');
    $data['username'] = $session_data['username'];
    $data['level'] = $session_data['level'];
    $data['Account'] = $this->Auth_model->select_by_id($id_user)->row();
    $this->load->view('account/edit', $data);
  }

  public function editp()
  {
    $id_user = $this->input->post('id_user');
    $data['nama'] = $this->input->post('nama');
    $data['username'] = $this->input->post('username');
    $data['password'] = md5($this->input->post('password'));
    $data['level'] = $this->input->post('level');
    // $data['nohp'] = $this->input->post('nohp');
    // $data['kelamin'] = $this->input->post('kelamin');
    // $data['agama'] = $this->input->post('agama');
    // $data['alamat'] = $this->input->post('alamat');
    
    $this->Auth_model->update($id_user, $data);
    $this->session->set_flashdata('msg','Data Berhasil di Update');
    redirect(site_url('account/index'));
  }

  public function delete($id_user){
      $this->Auth_model->delete($id_user);
      redirect(site_url('Account'));
  }

}
