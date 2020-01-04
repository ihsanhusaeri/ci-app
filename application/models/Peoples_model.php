<?php 
    class Peoples_model extends CI_Model {
        public function get_all_peoples() {
            $query = $this->db->get( 'peoples' );

            return $query->result_array();
        }

        public function get_peoples( $limit = 0, $start = 0 ) {
            $query = $this->db->get( 'peoples', $limit, $start );
            
            return $query->result_array();
        }
    }
?>