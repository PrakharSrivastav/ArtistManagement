<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_logins($where = null, $limit = null) {
        $this->db->select();
        if (!empty($where)) {
            $this->db->where($where);
        }
        if(!empty($limit)){
            $this->db->limit($limit);
        }
        $this->db->order_by("id", "DESC");
        $result = $this->db->get("artist_admin");
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
        return false;
    }

    public function insert_login($data) {
        return $this->db->insert('artist_admin', $data);
    }

    public function edit_login($data, $where) {
        return $this->db->update('artist_admin', $data, $where);
    }

    public function delete_login($where) {
        return $this->db->delete('artist_admin', $where);
    }

}
