<?php 
    class Peoples extends CI_Controller {
        public function index() {
            $this->load->view( 'templates/header' );
            $this->load->view( 'peoples/index' );
            $this->load->view( 'templates/footer' );
        }
    }
?>