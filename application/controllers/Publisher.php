<?php

class Publisher extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('publisher_model');
    }


    public function index(){
        $data['publishers'] = $this->publisher_model->publisher_list();

        $this->form_validation->set_rules('name', 'Publisher Name', 'required|is_unique[publisher.name]');
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('publishers/list', $data);
            $this->load->view('templates/footer');
        }else{
            $this->publisher_model->add_publisher();
            redirect('/publisher');
        }

    }



} //end user class