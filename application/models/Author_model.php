<?php


class Author_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function author_list()
    {
        return $this->db->get('author')->result_array();
    }

    public function add_author()
    {
        $data = array(
            'last_name'             => $this->input->post('last_name'),
            'first_name'            => $this->input->post('first_name')
            );
        return $this->db->insert('author',$data);
    }




}
//end of class