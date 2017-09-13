<?php
class Video_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_videos()
    {

        $query = $this->db->get('baogu_video');
        return $query->result_array();

    }

    public function getVideoByid($id)
    {
        $query = $this->db->get_where('baogu_video', array('id'=> $id));
        return $query->row_array();
    }
}