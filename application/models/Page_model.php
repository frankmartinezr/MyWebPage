<?php

class Page_model extends CI_Model {

    public function get_welcome_data()
    {
        $sql = "SELECT * FROM users";
        $query = $this->db->query($sql);

        return $query->result_array();
    }

    public function get_about_data()
    {
        $sql = "SELECT * FROM users";
        $query = $this->db->query($sql);

        return $query->result_array();
    }
}

?>