<?php

class Book extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('user_model');
        $this->load->model('author_model');
        $this->load->model('publisher_model');
    }

    public function view_all()
    {
        $this->load->view('templates/header');
        $this->load->view('user/login');
        $this->load->view('templates/footer');
    }

    public function add_book()
    {
        $data['publishers'] = $this->publisher_model->publisher_list();
        $data['authors'] = $this->author_model->author_list();

        $this->load->view('templates/header');
        $this->load->view('book/add', $data);
        $this->load->view('templates/footer');


    }


} //end user class