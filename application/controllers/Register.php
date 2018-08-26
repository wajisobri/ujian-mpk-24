<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
    }

	public function index()
	{
	    $username = $this->session->userdata('username');
	    $password = $this->session->userdata('password');
	    if($username != 'gani' && $password != 'gani01') {
	        $this->load->view('material/admin/login');
	    } else {
    	    $getUser = $this->Auth_model->getAllUser()->result();
    	    
            $data = array(
                'auth' => 'register/auth',
                'getAllUser' => $getUser
            );
    		$this->load->view('material/admin/register', $data);
	    }
    }

    public function auth() {
        // Send dataLogin melalui sendLogin
        $name = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = array(
            'username' => $username,
            'name' => $name,
            'status' => 'Tidak',
            'password' => $password
          );
        $send = $this->Auth_model->register($data);

        if ($send == TRUE) {
            // redirect ke halaman sukses
            redirect(base_url('register'));

        } else {
            redirect(base_url('register'));
        }
    }
    
    public function authlogin() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($username == 'gani' && $password == 'gani01') {
            // Register Session
            $data = array(
                'username' => $username,
                'password' => $password
            );
            $this->session->set_userdata($data);
            
            redirect(base_url('register'));

        } else {
            redirect(base_url('register'));
        }
    }
 }