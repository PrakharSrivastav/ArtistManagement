<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Album_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_albums($where = null, $limit = null) {
        $this->db->select();
        if (!empty($where)) {
            $this->db->where($where);
        }
        if(!empty($limit)){
            $this->db->limit($limit);
        }
        $this->db->order_by("id", "DESC");
        $result = $this->db->get("artist_album");
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
        return false;
    }

    public function insert_album($data) {
        return $this->db->insert('artist_album', $data);
    }

    public function edit_album($data, $where) {
        return $this->db->update('artist_album', $data, $where);
    }

    public function delete_album($where) {
        return $this->db->delete('artist_album', $where);
    }

}
