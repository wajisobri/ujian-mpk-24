<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model {
    
//    untuk mengcek jumlah username dan password yang sesuai
    function login($username,$password) {
        $this->db->select('id,username,password');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);
        
        $query =  $this->db->get();
        return $query->num_rows();
    }
    
    // untuk mengcek jumlah username dan password yang sesuai
    function register($data) {
        $query = $this->db->insert('user', $data);
        return $query;
    }
    
//    untuk mengambil data hasil login
    function getUser($username,$password) {

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('user')->row();
    }
    
    function getAllUser() {
        $query = $this->db->get('user');
        return $query;
    }
}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */