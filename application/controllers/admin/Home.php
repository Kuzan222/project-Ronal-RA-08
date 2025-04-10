<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if ($this->session->userdata('level') != 'Admin') {
            redirect('auth');
        }
    }
	public function index(){
        $this->db->from('saran');
        $saran = $this->db->get()->result_array();

        $data = array(
            'judul_halaman' => 'Dashboard',
            'saran'         => $saran
        );
		$this->template->load('template_admin','admin/dashboard',$data);
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('auth'));
    }
}
    