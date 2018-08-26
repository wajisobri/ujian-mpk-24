<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nilai_model extends CI_Model {
    
    function getEsai() {
        $query = $this->db->get('esai');
        return $query;
    }

    function getNilai() {
        $query = $this->db->get('nilai');
        return $query;
    }
    
}

/* End of file Nilai_model.php */
/* Location: ./application/models/Nilai_model.php */