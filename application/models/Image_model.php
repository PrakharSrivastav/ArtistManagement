<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Image_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function get_images($where = null){
        $this->db->select();
        if(!empty($where)){
            $this->db->where($where);
        }
        $result = $this->db->get("artist_images");
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
        return false;
    }
    
    public function insert_image($data){
        return $this->db->insert('artist_images', $data);
    }
    
    public function edit_image($data ,$where){
        return $this->db->update('artist_images', $data, $where);
    }
    
    public function delete_image($where){
        return $this->db->delete('artist_images',  $where);
    }
}
