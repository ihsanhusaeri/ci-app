<?php 
    class Mahasiswa_model extends CI_Model {
        public function get_all_mahasiswa() {
            $query = $this->db->get( 'mahasiswa' );
            return $query->result_array();
        }

        public function insert_mahasiswa() {
            $data = [
                "nama" => $this->input->post( 'nama' ),
                "nrp" => $this->input->post( 'nrp' ),
                "email" => $this->input->post( 'email' ),
                "jurusan" => $this->input->post( 'jurusan' )
            ];
            $this->db->insert( 'mahasiswa', $data );
        }

        public function update_mahasiswa() {
            $data = [
                "id" => $this->input->post( 'id' ),
                "nama" => $this->input->post( 'nama' ),
                "nrp" => $this->input->post( 'nrp' ),
                "email" => $this->input->post( 'email' ),
                "jurusan" => $this->input->post( 'jurusan' )
            ];
            $this->db->replace( 'mahasiswa', $data );
        }

        public function delete_mahasiswa( $id ) {
            $this->db->where( 'id', $id );
            $this->db->delete( 'mahasiswa' );
        }

        public function get_mahasiswa_by_id( $id ) {
            $this->db->where( 'id', $id );
            $query = $this->db->get( 'mahasiswa' );
            return $query->result_array();
        }

        public function search_mahasiswa() {
            // echo $keyword;
            $keyword = $this->input->post( 'keyword', true );
            // echo $keyword;
            $this->db->like( 'nama', $keyword );
            $this->db->or_like( 'nrp', $keyword );
            $this->db->or_like( 'email', $keyword );
            $this->db->or_like( 'jurusan', $keyword );
            $query = $this->db->get( 'mahasiswa' );
            return $query->result_array();
        }
    }
?>