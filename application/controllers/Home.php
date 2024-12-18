<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        // Mengambil konfigurasi
        $this->db->from('konfigurasi');
        $konfigurasi = $this->db->get()->row();

        // Mengambil kategori
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $konten = $this->db->get()->result_array();

        // Mengambil konten untuk carousel
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();

        // Mengirim data ke view
        $data = array(
            'judul_halaman' => "AnimeSport",
            'konfigurasi'   => $konfigurasi,
            'kategori'      => $kategori,
            'caraousel'     => $caraousel,
            'konten'        => $konten
        );
        $this->load->view('beranda', $data);
    }
    public function kategori($id){
        $this->db->from('konfigurasi');
        $konfigurasi = $this->db->get()->row();

        // Mengambil kategori
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->where('a.id_kategori',$id);
        $konten = $this->db->get()->result_array();
        
        $this->db->from('kategori');
        $this->db->where('id_kategori',$id);
        $nama_kategori = $this->db->get()->row()->nama_kategori;
        // Mengirim data ke view
        $data = array(
            'judul_halaman' => $nama_kategori. " | AnimeSport",
            'nama_kategori' => $nama_kategori,
            'konfigurasi'   => $konfigurasi,
            'kategori'      => $kategori,
            'konten'        => $konten
        );
        $this->load->view('kategori', $data);
    }

    public function artikel($id){
        // Mengambil konfigurasi
        $this->db->from('konfigurasi');
        $konfigurasi = $this->db->get()->row();

        // Mengambil kategori
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        // Mengambil konten berdasarkan ID
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->where('slug', $id);
        $konten = $this->db->get()->row();

        // Mengirim data ke view
        $data = array(
            'judul'         => $konten->judul . " - AnimeSport",
            'konfigurasi'   => $konfigurasi,
            'kategori'      => $kategori,
            'konten'        => $konten
        );
        $this->load->view('detail', $data);
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('home'));
    }

    public function anime(){
                // Mengambil konfigurasi
                $this->db->from('konfigurasi');
                $konfigurasi = $this->db->get()->row();
        
                // Mengambil kategori
                $this->db->from('kategori');
                $kategori = $this->db->get()->result_array();
        
                // Mengambil konten berdasarkan ID
                $this->db->from('konten a');
                $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
                $konten = $this->db->get()->result_array();
        
                // Mengirim data ke view
                $data = array(
                    'judul_halaman' => "AnimeSport",
                    'konfigurasi'   => $konfigurasi,
                    'kategori'      => $kategori,
                    'konten'        => $konten
                );
                $this->load->view('anime', $data);
    }
}
