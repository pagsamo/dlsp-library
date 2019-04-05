<?php


class Publisher_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function publisher_list()
    {
        return $this->db->get('publisher')->result_array();
    }

    public function add_publisher()
    {
        $data = array('name' => $this->input->post('name'));
        return $this->db->insert('publisher',$data);
    }




}
//end of class