<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

    function __construct() 
    {
        parent::__construct();  
        $this->load->model('Nilai_model');
    }

	public function index()
	{
        $getNilai = $this->Nilai_model->getNilai();
        if($getNilai->num_rows() == 0) {
            $getNilai = FALSE;
        } else {
            $getNilai = $getNilai->result();
        }

        $data = array(
            'date' => now('Asia/Jakarta'),
            'logged' => $this->session->userdata('username'),
            'listNilai' => $getNilai
        );
        
		$this->load->view('material/admin/list-nilai', $data);
    }
}
