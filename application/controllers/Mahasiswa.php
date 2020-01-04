<?php 
    class Mahasiswa extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model( 'Mahasiswa_model' );
            $this->load->library( 'form_validation' );
        }
        public function index() {
            $data['judul'] = 'Daftar Mahasiswa';
            $data['mahasiswa'] = $this->Mahasiswa_model->get_all_mahasiswa();
            $this->load->view( 'templates/header', $data );
            $this->load->view( 'mahasiswa/index', $data );
            $this->load->view( 'templates/footer' );
        }
        public function tambah() {
            $data['judul'] = 'Form Tambah Mahasiswa';

            $this->form_validation->set_rules( 'nama', 'Nama', 'required' );
            $this->form_validation->set_rules( 'nrp', 'NRP', 'required|numeric' );
            $this->form_validation->set_rules( 'email', 'Email', 'required|valid_email' );
            $this->form_validation->set_rules( 'jurusan', 'Jurusan', 'required' );
            if ( $this->form_validation->run() == false ) {
                $this->load->view( 'templates/header', $data );
                $this->load->view( 'mahasiswa/tambah' );
                $this->load->view( 'templates/footer' );
            } else {
                $this->Mahasiswa_model->insert_mahasiswa();
                $this->session->set_flashdata( 'flash', 'ditambahkan.' );
                redirect( 'mahasiswa' );
            }
        }

        public function hapus( $id ) {
            $this->Mahasiswa_model->delete_mahasiswa( $id );
            $this->session->set_flashdata( 'flash', 'dihapus.' );
            redirect( 'mahasiswa' );
        }

        public function detail( $id ) {
            $data['mahasiswa'] = $this->Mahasiswa_model->get_mahasiswa_by_id( $id );
            $data['judul'] = "Detail Mahasiswa";
            $this->load->view( 'templates/header', $data );
            $this->load->view( 'mahasiswa/detail', $data );
            $this->load->view( 'templates/footer' );
        }

        public function ubah( $id ) {
            $data['judul'] = 'Ubah Data Mahasiswa';
            $data['mahasiswa'] = $this->Mahasiswa_model->get_mahasiswa_by_id( $id );
            $data['jurusan'] = ['Teknik Informatika', 'Teknik Komputer', 'Sistem Informasi', 'Ilmu Komputer', 'Manajemen Informatika'];
            
            $this->form_validation->set_rules( 'nama', 'Nama', 'required' );
            $this->form_validation->set_rules( 'nrp', 'NRP', 'required|numeric' );
            $this->form_validation->set_rules( 'email', 'Email', 'required|valid_email' );
            $this->form_validation->set_rules( 'jurusan', 'Jurusan', 'required' );

            if ( $this->form_validation->run() == false ) {
                $data['judul'] = 'Ubah Data Mahasiswa';
                $this->load->view( 'templates/header', $data );
                $this->load->view( 'mahasiswa/ubah', $data );
                $this->load->view( 'templates/footer' );
            } else {
                $this->Mahasiswa_model->update_mahasiswa();
                $this->session->set_flashdata( 'flash', 'diubah.' );
                redirect( 'mahasiswa' );
            }
        }

        public function cari() {
            $data['mahasiswa'] = $this->Mahasiswa_model->search_mahasiswa();
            $data['judul'] = 'Daftar Mahasiswa';
            $this->load->view( 'templates/header', $data );
            $this->load->view( 'mahasiswa/index', $data );
            $this->load->view( 'templates/footer' );
        }
    }
?>