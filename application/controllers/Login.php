<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
        $data = array(
            'auth' => 'login/auth'
        );
		$this->load->view('material/login', $data);
    }

    public function auth() {
        $this->load->model('Auth_model');

        // Send dataLogin melalui sendLogin
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $send = $this->Auth_model->login($username,$password);

        if ($send == TRUE) {
            // Get Detail Data ( use -> function getUser() )
            $getUser = $this->Auth_model->getUser($username,$password);
            
            // Register Session
            $data = array(
                'logged' => TRUE,
                'username' => $getUser->username
            );
            $this->session->set_userdata($data);
            
            // redirect ke halaman sukses
            echo "success";

        } else {
            // tampilkan pesan error
            echo "error0";
        }
    }
 }