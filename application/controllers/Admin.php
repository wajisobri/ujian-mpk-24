<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() 
    {
        parent::__construct();  
    }

	public function index()
	{
        $getExam = $this->Home_model->getExam();
        if($getExam->num_rows() == 0) {
            $getExam = FALSE;
        } else {
            $getExam = $getExam->result();
        }

        $data = array(
            'web_title' => 'MPK SMAN 24 Bandung',
            'date' => now('Asia/Jakarta'),
            'logged' => $this->session->userdata('username'),
            'list_exam' => $getExam
        );
        
		$this->load->view('material/index', $data);
    }

    public function login()
    {
        // Send dataLogin melalui sendLogin
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if(empty($username AND $password)):
            $this->load->view('material/admin/login');

        else:
            $this->load->model('Admin_model');
            $data = array(
                'username' => $username,
                'password' => $password
            );

            $checkLogin = $this->Admin_model->login($data);

            if ($checkLogin == TRUE) {
                $data = array(
                    'logged' => TRUE,
                    'username' => $username
                );
                $this->session->set_userdata($data);

                echo "success";
            } else {
                echo "error0";
            }

        endif;
    }
}
