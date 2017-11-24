<?php  if(! defined ('BASEPATH'))exit('no direct script access allowed');

class Barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }

    public function index()
    {
        $data = array(
            'inventory' => $this->Barang_model->get_all()
        );
        $this->load->view('barang/list/index', $data);
    }

    public function create()
    {
        $this->load->view('barang/add/index');
    }

    public function store()
    {
        $data = array (
            'nama_barang' => $this->input->post('nama_barang'),
            'jumlah' => $this->input->post('jumlah'),
            'harga' => $this->input->post('harga')
        );

        $result = $this->Barang_model->store($data);
        if ($result > 0) {
            redirect(site_url('barang/index'));
        } else {
            $this->create();
        }
    }

}