<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model'); // Load model untuk berinteraksi dengan database
    }

    public function index() {
        $this->load->view('registrasi'); // Load view registrasi
    }

    public function tambah() {
        $this->db->from('user');
        $this->db->where('username', $this->input->post('username'));
        $cek = $this->db->get()->result_array();

        if ($cek != NULL) {
            $this->session->set_flashdata('alert', 
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Maaf!</strong> Username Sudah Digunakan
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('registrasi');
        }

        $this->User_model->tambah();

        $this->session->set_flashdata('alert', 
            '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>Selamat!</strong> User Berhasil Ditambahkan
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
        redirect('home');
    }
    }
