<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('log_usr');
    }

    public function login(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password')); // Disarankan mengganti dengan password_hash

        // Ambil data user berdasarkan username
        $this->db->from('user');
        $this->db->where('username', $username);
        $cek = $this->db->get()->row();

        // Periksa apakah username ada
        if ($cek == NULL) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Maaf!</strong> Username Tidak Ada
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('log');
        }

        // Periksa password
        if ($password == $cek->password) { // Pastikan nama kolom benar, misalnya 'password'
            $data = array(
                'id_user' => $cek->id_user,
                'nama' => $cek->nama,
                'username' => $cek->username,
                'level' => $cek->level,
            );
            $this->session->set_userdata($data);
            redirect('home');
        } else {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Maaf!</strong> Password Salah
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('log');
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}
