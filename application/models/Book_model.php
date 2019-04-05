<?php


class Book_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function book_list()
    {
        $this->db->get('book');

    }

    public function add_book()
    {

    }




}
//end of class