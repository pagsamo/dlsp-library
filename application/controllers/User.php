<?php

class User extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('user_model');
    }



    /**
     *
     */
    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('user/login');
            $this->load->view('templates/footer');
        }else{
            if($this->user_model->validate_user()){
                redirect('/books/list');
            }else{
                $data['user_validation_error'] = 'Wrong username/password';
                $this->load->view('templates/header');
                $this->load->view('user/login',$data);
                $this->load->view('templates/footer');
            }
        }
    }

    /**
     *
     */
    public function register()
    {
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('repeat_password', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');

        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('user/registration');
            $this->load->view('templates/footer');
        }else{
            $this->user_model->register_user();
            redirect('/');
        }
    }

} //end user class