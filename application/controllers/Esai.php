<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Esai extends CI_Controller {

    function __construct() 
    {
        parent::__construct();  
        $this->load->model('Nilai_model');
    }

	public function index()
	{
        $getEsai = $this->Nilai_model->getEsai();
        if($getEsai->num_rows() == 0) {
            $getEsai = FALSE;
        } else {
            $getEsai = $getEsai->result();
        }

        $data = array(
            'date' => now('Asia/Jakarta'),
            'logged' => $this->session->userdata('username'),
            'listEsai' => $getEsai
        );
        
		$this->load->view('material/admin/list-esai', $data);
    }
}
