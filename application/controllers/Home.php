<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() 
    {
        parent::__construct();  
        if ($this->session->userdata('logged')<>1) {
            redirect(site_url('login'));
        }
        $this->load->model('Home_model');
    }

	public function index()
	{
        // Jika User telah memulai Ujian (Check Cookie)
        if(get_cookie('doUjian') == TRUE):
            $cookieTipe = get_cookie('doTipe');
            redirect('ujian/do/'.$cookieTipe);
        endif;
        
        $getExam = $this->Home_model->getExam();
        if($getExam->num_rows() == 0) {
            $getExam = FALSE;
        } else {
            $getExam = $getExam->result();
        }

        $data = array(
            'date' => now('Asia/Jakarta'),
            'logged' => $this->session->userdata('username'),
            'list_exam' => $getExam
        );
        
		$this->load->view('material/index', $data);
    }
}
