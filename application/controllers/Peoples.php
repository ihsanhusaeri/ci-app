<?php 
    class Peoples extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model( 'Peoples_model', 'peoples' );
        }

        public function index() {
            $data['judul'] = 'Peoples';
            $data['peoples'] = $this->peoples->get_peoples( 10, 10 );
            $this->load->view( 'templates/header', $data );
            $this->load->view( 'peoples/index', $data );
            $this->load->view( 'templates/footer' );
        }
    }
?>