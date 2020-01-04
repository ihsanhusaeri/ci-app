<?php 
    class Peoples extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model( 'Peoples_model', 'peoples' );
        }

        public function index() {
            $data['judul'] = 'Peoples';

            //loading
            $this->load->library( 'pagination' );
            
            $config['base_url'] = 'http://localhost/ci-app/peoples/index/';
            $config['total_rows'] = $this->peoples->count_all_peoples();
            $config['per_page'] = 9;

            //styling pagination
            $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination pagination-sm justify-content-center">';
            $config['full_tag_close'] = '</ul></nav>';

            $config['num_links'] = 5;
            
            $config['first_link'] = 'First';
            $config['last_link'] = 'Last';

            $config['next_link'] = '&raquo';
            $config['next_tag_open'] = '<li class="page-item">';
            $config['next_tag_open'] = '</li>';

            $config['prev_link'] = '&laquo';
            $config['prev_tag_open'] = '<li class="page-item">';
            $config['prev_tag_open'] = '</li>';

            $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
            $config['cur_tag_close'] = '</a></li>';

            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';

            $config['attributes'] = array('class' => 'page-link');

            $this->pagination->initialize( $config );
            
            $data['start'] = $this->uri->segment( 3 );

            $data['peoples'] = $this->peoples->get_peoples( $config['per_page'], $data['start'] );
            $this->load->view( 'templates/header', $data );
            $this->load->view( 'peoples/index', $data );
            $this->load->view( 'templates/footer' );
        }
    }
?>