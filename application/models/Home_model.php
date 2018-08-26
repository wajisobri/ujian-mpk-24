<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {
    
    function getExam() {
        $this->db->select('id,token,title,tipe,created_at');
        $this->db->from('ujian');
        $this->db->where('status', 'Aktif');
        
        $query =  $this->db->get();
        return $query;
    }

    function isExam($user) {
        $where = array(
            'user' => $username
        );
        
        $query = $this->db->get_where('nilai', $where, 1);
        return $query;
    }
    
}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */