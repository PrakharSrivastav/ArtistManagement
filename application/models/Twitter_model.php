<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Twitter_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function get_settings(){
        $this->db->select();
        $result = $this->db->get("artist_twitter_settings");
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
        return false;
    }
    
    public function insert_settings($data){
        return $this->db->insert('artist_twitter_settings', $data);
    }
    
    public function edit_settings($data ,$where){
        return $this->db->update('artist_twitter_settings', $data, $where);
    }
}
