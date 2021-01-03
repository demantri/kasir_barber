<?php 
  class pembayaran extends CI_Controller
    {
        // function __construct(){
        //     parent::__construct();	
        //     $this->load->model('roles_model', 'model');
        // }

        public function index()
        {
            // $data['roles'] = $this->db->get("role")->result();
            $this->template->load('index', 'transaksi/pembayaran/index');
        }

        public function add()
        {
            # code...
            $data['jasa'] = $this->db->get("list_cukur")->result();
            $data['pelanggan'] = $this->db->get("pelanggan")->result();
            $this->template->load('index', 'transaksi/pembayaran/add', $data);
        }
    }
?>