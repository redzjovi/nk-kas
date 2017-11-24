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
            $data['kas'] = $this->Kas_model->get_all()->result();
            $this->load->view('kas/permin_kas/list/index', $data);
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
        $this->load->view('kas/permin_kas/add/index',$data);
    }

    public function add()
    {
        $data = array (
            'date' => $this->input->post('date'),
            'jenis_pengeluaran' => $this->input->post('jenis_pengeluaran'),
            'divisi' => $this->input->post('divisi'),
            'jumlah' => remove_number_format($this->input->post('jumlah')), // number_helper
            'keterangan' => $this->input->post('keterangan'),
            'status' => $this->input->post('status')
        );
        $result = $this->Kas_model->add($data);
        if ($result > 0) {
            redirect(site_url('Kas/index'));
        } else {
            $this->index();
        }
    }

    
    

    //untuk view
    public function edit($id_kas){
        $session_data = $this->session->userdata('login');
        $data['username'] = $session_data['username'];
        $data['level'] = $session_data['level'];
        $data['kas'] = $this->Kas_model->select_by_id($id_kas)->row();
        $this->load->view('kas/permin_kas/edit/index', $data);
    }
    
    public function proses_edit_kas(){
        $id_kas = $this->input->post('id_kas');
        $data['date'] = $this->input->post('date');
        $data['jenis_pengeluaran'] = $this->input->post('jenis_pengeluaran');
        $data['divisi'] = $this->input->post('divisi');
        $data['jumlah'] = $this->input->post('jumlah');
        $data['keterangan'] = $this->input->post('keterangan');
        $data['status'] = $this->input->post('status');
        $this->Kas_model->update_kas($id_kas, $data);         
        redirect(site_url('Kas/index'));
        //print_r($data);
    }

    public function pengaccan()
    {
        $session_data = $this->session->userdata('login');
        $data['username'] = $session_data['username'];
        $data['level'] = $session_data['level'];
        $data['acc'] = $this->Kas_model->get_all()->result();
        $this->load->view('kas/acc/list_acc', $data);
    }    

    public function acc($id_kas){
        $session_data = $this->session->userdata('login');
        $data['username'] = $session_data['username'];
        $data['level'] = $session_data['level'];
        $data['kas'] = $this->Kas_model->select_by_id($id_kas)->row();
        $this->load->view('kas/acc/acc', $data);
    }
    
    public function proses_acc(){
        $id_kas = $this->input->post('id_kas');
        $data['date'] = $this->input->post('date');
        $data['jenis_pengeluaran'] = $this->input->post('jenis_pengeluaran');
        $data['divisi'] = $this->input->post('divisi');
        $data['jumlah'] = $this->input->post('jumlah');
        $data['keterangan'] = $this->input->post('keterangan');
        $data['status'] = $this->input->post('status');
        $this->Kas_model->update_kas($id_kas, $data);         
        redirect(site_url('kas/pengaccan'));
    }

    public function delete (){
        $id = $this->input->post('id');
        $this->Kas_model->delete_kas($id);
        echo json_encode(true);
    }

}