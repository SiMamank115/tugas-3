<?php
class Peoples_model extends CI_Model {
    public function get($limit,$start) {
        return $this->db->get("peoples",$limit,$start)->result_array();
    }
    public function count() {
        return $this->db->get("peoples")->num_rows();
    }
}