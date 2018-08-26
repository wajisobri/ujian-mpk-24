<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ujian_model extends CI_Model {
    
    // Function Get Data from Database
    function getExam($tipe = NULL)
    {
        if(empty($tipe)):
            $query = $this->db->get_where('ujian', array('status' => 'Aktif'));
            return $query;
        else:
            $query = $this->db->get_where('ujian', array('tipe' => $tipe));
            return $query;
        endif;
    }

    function getExam1($question = NULL)
    {
        if(empty($question)):
            $query = $this->db->get('soal_tipe_1');
            return $query;
        else:
            $query = $this->db->get_where('soal_tipe_1', array('id_soal' => $question));
            return $query;
        endif;
    }

    function getExam2($question = NULL)
    {
        if(empty($question)):
            $query = $this->db->get('soal_tipe_2');
            return $query;
        else:
            $query = $this->db->get_where('soal_tipe_2', array('id_soal' => $question));
            return $query;
        endif;
    }

    function getExam3($question = NULL)
    {
        if(empty($question)):
            $query = $this->db->get('soal_tipe_3');
            return $query;
        else:
            $query = $this->db->get_where('soal_tipe_3', array('id_soal' => $question));
            return $query;
        endif;
    }

    function getExam4($question = NULL)
    {
        if(empty($question)):
            $query = $this->db->get('soal_tipe_4');
            return $query;
        else:
            $query = $this->db->get_where('soal_tipe_4', array('id_soal' => $question), 1);
            return $query;
        endif;
    }

    function getExam5()
    {
        $query = $this->db->get('soal_tipe_5');
        return $query;
    }

    function getRange3() {
        $query = $this->db->get('range_nilai');
        return $query;
    }


    // Function Check Data
    function checkExam($tipe = NULL)
    {
        $data = array(
            'tipe_ujian' => $tipe,
            'user' => $this->session->userdata('username')
        );

        if(empty($tipe)):
            return FALSE;
        else:
            $query = $this->db->get_where('nilai', $data, 1);
            return $query;
        endif;
    }

    // Function Input Data
    function storeNilai($data)
    {
        $query = $this->db->insert('nilai', $data);
        return $query;
    }

    function storeEsai($data)
    {
        $query = $this->db->insert('esai', $data);
        return $query;
    }
    
}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */