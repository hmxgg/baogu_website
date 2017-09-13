<?php
class Timeline_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_timelines($slug = FALSE)
    {

        $query = $this->db->get('baogu_timeline');
        return $query->result_array();

    }
}