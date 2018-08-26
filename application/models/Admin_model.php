<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {
    
//    untuk mengcek jumlah username dan password yang sesuai
    function login($data) {
        $query =  $this->db->get_where('admin', $data, 1);
        return $query->num_rows();
    }
    
//    untuk mengambil data hasil login
    function getUser($username,$password) {

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('user')->row();
    }
}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */