<?php


class User_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }


    /**
     * @param $password
     * @return bool|mixed|string
     */
    private function hash_password($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    /**
     * @param $username
     * @param $password
     * @param $input_password
     */
    private function validate_password($password, $input_password)
    {
        $password = password_hash($password, PASSWORD_BCRYPT);
        return $password === $input_password?TRUE:FALSE;
    }

    /**
     * @return mixed
     */
    public function register_user()
    {
        $hashed_password        =       $this->hash_password($this->input->post('password'));

        $data = array(
            'username'                  => $this->input->post('username'),
            'hashed_password'           => $hashed_password,
            'last_name'                 => $this->input->post('last_name'),
            'first_name'                => $this->input->post('first_name'),
            'email'                     => $this->input->post('email')
        );

        return $this->db->insert('user', $data);
    }

    /**
     * @param $username
     * @param $password
     * @param $hashed_password
     */
    public function validate_user()
    {
        $this->db->select('hashed_password');
        $this->db->from('user');
        $this->db->where('username', $this->input->post('username'));

        $query = $this->db->get();
        $result = $query->row();
        if(!empty($result))
        {
            return $this->validate_password($this->input->post('password'),$result->hashed_password);
        }else{
            return FALSE;
        }

    }


}
//end of class