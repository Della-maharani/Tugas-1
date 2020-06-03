<?php
defined('BASEPATH') OR exit('No direct script aceess allowed');

class login extends CI_Controller{

    // Halaman Login
    public function index()
    {
       $data = array('tittle'  => 'Login Administrator');
       $this->load->view('login/list','$data', FALSE);
    }
}
/*end of file login.php */
/* Location: ./application/controllers/Login.php */