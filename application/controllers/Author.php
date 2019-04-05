<?php

class Author extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('author_model');
    }


    public function index(){
        $data['authors'] = $this->author_model->author_list();

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('author/list', $data);
            $this->load->view('templates/footer');
        }else{
            $this->author_model->add_author();
            redirect('/author');
        }

    }



} //end user class