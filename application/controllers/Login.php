<?php
class Login extends CI_Controller {

    public function index()
    {
        $this->load->view('pages/login/index');
    }
    
    public function prc(){
        $data = $this->db->query("SELECT * FROM tb_user")->result();
        
        print_r($data);
    }
}