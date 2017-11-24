<?php  if(! defined ('BASEPATH'))exit('no direct script access allowed');

class Kas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $datasession = $this->session->userdata('login');
        if(isset($datasession))
        {
             if ($datasession['logged_in']<>true)
             {
                 redirect(site_url('Auth'));
             }
        }
        else
        {
             redirect(site_url('Auth'));
        }
        $this->load->model('Kas_model');
    }

    public function index()
    {
        if ($this->session->userdata('login')) {
            $session_data = $this->session->userdata('login');
            $data['username'] = $session_data['username'];
            $data['level'] = $session_data['level'];
            $data['kas_masuk'] = $this->Kasmasuk_model->get_all()->result();
            $this->load->view('kas/kas_masuk', $data);
          }
          else {
            redirect('auth');
          }
    }

    public function create()
    {
        $session_data = $this->session->userdata('login');
        $data['username'] = $session_data['username'];
        $data['level'] = $session_data['level'];
        $this->load->view('kas/kas_masuk/add',$data);
    }

    public function add()
    {
        $data = array (
            'date' => $this->input->post('date'),
            'jml' => $this->input->post('jml'),
            'id_kas' => $this->input->post('id_kas')
        );

        $result = $this->Kasmasuk_model->add($data);
        if ($result > 0) {
            redirect(site_url('kas_masuk/index'));
        } else {
            $this->index();
        }
    }

    //untuk view
    public function edit($id_kas){
        $session_data = $this->session->userdata('login');
        $data['username'] = $session_data['username'];
        $data['level'] = $session_data['level'];
        $data['kas'] = $this->Kasmasuk_model->select_by_id($id_kas)->row();
        $this->load->view('kas/kas_masuk/edit', $data);
    }
    
    public function proses_edit_kas(){
        $id_kas = $this->input->post('id_kasmasuk');
        $data['date'] = $this->input->post('date');
        $data['jml'] = $this->input->post('jml');
        $data['id_kas'] = $this->input->post('id_kas');
        $this->Kasmasuk_model->update_kas($id_kasmasuk, $data);         
        redirect(site_url('kas_masuk/index'));
        //print_r($data);
    }

    public function delete (){
        $id = $this->input->post('id');
        $this->Kasmasuk_model->delete_kas($id);
        echo json_encode(true);
    }

    public function saldo(){
        $session_data = $this->session->userdata('login');
        $data['username'] = $session_data['username'];
        $data['level'] = $session_data['level'];
        $data['kas_masuk'] = $this->Kasmasuk_model->select_by_id($id_kas)->row();
        $this->load->view('kas/kas_masuk/saldo', $data);
        $jml = $data['jml'];
        $total = $data['total'];
        $total = 0 ;
        $total = $jml + $total - $jumlah;
    }

}