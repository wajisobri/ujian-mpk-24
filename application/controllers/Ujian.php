<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends CI_Controller {

    function __construct() 
    {
        parent::__construct();  
        // Cek Apakah User sudah Login atau Belum
        if ($this->session->userdata('logged')<>1) {
            redirect(site_url('login'));
        }
        $this->load->model('Ujian_model');
    }

	public function index()
	{
        // Jika User telah memulai Ujian (Check Cookie)
        if(get_cookie('doUjian') == TRUE):
            $cookieTipe = get_cookie('doTipe');
            redirect('Ujian/do/'.$cookieTipe);
        endif;
        $this->load->model('Home_model');

        // Mengambil Data List Ujian
        $getExam = $this->Home_model->getExam();
        if($getExam->num_rows() == 0) {
            $getExam = FALSE;
        } else {
            $getExam = $getExam->result();
        }

        $checkExam1 = $this->Ujian_model->checkExam(1)->row();
        $checkExam2 = $this->Ujian_model->checkExam(2)->row();
        $checkExam3 = $this->Ujian_model->checkExam(3)->row();
        $checkExam4 = $this->Ujian_model->checkExam(4)->row();
        $checkExam5 = $this->Ujian_model->checkExam(5)->row();

        $data = array(
            'logged' => $this->session->userdata('username'),
            'list_exam' => $getExam,
            'checkExam1' => $checkExam1,
            'checkExam2' => $checkExam2,
            'checkExam3' => $checkExam3,
            'checkExam4' => $checkExam4,
            'checkExam5' => $checkExam5
        );

        $this->load->view('material/list_ujian', $data);	
    }

    public function do($tipe = NULL)
    {
        // Jika User telah memulai Ujian (Check Cookie)
        if(get_cookie('doUjian') == TRUE):
            $cookieTipe = get_cookie('doTipe');
            if($cookieTipe != $tipe):
                redirect('Ujian/do/'.$cookieTipe);
            else:
                $tipe = $cookieTipe;
            endif;
        endif;

        // Jika Tipe Ujian Kosong
        if(empty($tipe)):
            redirect(site_url('Ujian'));
        endif;

        if($tipe == 1) {
            // Mengambil Data Soal Ujian dan Cek Apakah Ujian Sudah Dikerjakan
            $getExam1 = $this->Ujian_model->getExam1()->result();
            $checkExam1 = $this->Ujian_model->checkExam(1)->num_rows();

            if($checkExam1 != NULL):
                $data = array(
                    'type' => 'ERROR',
                    'messages' => 'Anda telah mengerjakan ujian ini'
                );
                $this->load->view('material/result', $data);
            else:
                $data = array(
                    'listExam' => $getExam1
                );

                // Jika Ujian telah dimulai (Saved in Cookie)
                if(get_cookie('doUjian') == TRUE && get_cookie('doAs') == $this->session->userdata('username')):
                    $this->load->view('material/ujian_1', $data);

                // Jika Ujian belum dimulai (Create New Cookie)
                else:
                    // Set Cookie untuk Ujian, disimpan selama 3 Jam
                    set_cookie('doTipe', 1, 9800);
                    set_cookie('doUjian', TRUE, 9800);
                    set_cookie('doAs', $this->session->userdata('username'), 9800);
                    set_cookie('startTime', time(), 9800);
                    $this->load->view('material/ujian_1', $data);
                endif;
            endif;

        } else if($tipe == 2) {
            // Mengambil Data Soal Ujian dan Cek Apakah Ujian Sudah Dikerjakan
            $getExam2 = $this->Ujian_model->getExam2()->result();
            $checkExam2 = $this->Ujian_model->checkExam(2)->num_rows();

            if($checkExam2 != NULL):
                $data = array(
                    'type' => 'ERROR',
                    'messages' => 'Anda telah mengerjakan ujian ini'
                );
                $this->load->view('material/result', $data);
            else:
                $data = array(
                    'listExam' => $getExam2
                );

                // Jika Ujian telah dimulai (Saved in Cookie)
                if(get_cookie('doUjian') == TRUE && get_cookie('doAs') == $this->session->userdata('username')):
                    $this->load->view('material/ujian_2', $data);

                // Jika Ujian belum dimulai (Create New Cookie)
                else:
                    // Set Cookie untuk Ujian, disimpan selama 3 Jam
                    set_cookie('doTipe', 2, 9800);
                    set_cookie('doUjian', TRUE, 9800);
                    set_cookie('doAs', $this->session->userdata('username'), 9800);
                    set_cookie('startTime', time(), 9800);
                    $this->load->view('material/ujian_2', $data);
                endif;
            endif;
        } else if($tipe == 3) {
            // Mengambil Data Soal Ujian dan Cek Apakah Ujian Sudah Dikerjakan
            $getExam3 = $this->Ujian_model->getExam3()->result();
            $checkExam3 = $this->Ujian_model->checkExam(3)->num_rows();

            if($checkExam3 != NULL):
                $data = array(
                    'type' => 'ERROR',
                    'messages' => 'Anda telah mengerjakan ujian ini'
                );
                $this->load->view('material/result', $data);
            else:
                $data = array(
                    'listExam' => $getExam3
                );

                // Jika Ujian telah dimulai (Saved in Cookie)
                if(get_cookie('doUjian') == TRUE && get_cookie('doAs') == $this->session->userdata('username')):
                    $this->load->view('material/ujian_3', $data);

                // Jika Ujian belum dimulai (Create New Cookie)
                else:
                    // Set Cookie untuk Ujian, disimpan selama 3 Jam
                    set_cookie('doTipe', 3, 9800);
                    set_cookie('doUjian', TRUE, 9800);
                    set_cookie('doAs', $this->session->userdata('username'), 9800);
                    set_cookie('startTime', time(), 9800);
                    $this->load->view('material/ujian_3', $data);
                endif;
            endif;

        } else if($tipe == 4) {
            // Mengambil Data Soal Ujian dan Cek Apakah Ujian Sudah Dikerjakan
            $getExam4 = $this->Ujian_model->getExam4()->result();
            $checkExam4 = $this->Ujian_model->checkExam(4)->num_rows();

            if($checkExam4 != NULL):
                $data = array(
                    'type' => 'ERROR',
                    'messages' => 'Anda telah mengerjakan ujian ini'
                );
    
                $this->load->view('material/result', $data);
            else:
                $data = array(
                    'listExam' => $getExam4
                );

                // Jika Ujian telah dimulai (Saved in Cookie)
                if(get_cookie('doUjian') == TRUE && get_cookie('doAs') == $this->session->userdata('username')):
                    $this->load->view('material/ujian_4', $data);

                // Jika Ujian belum dimulai (Create New Cookie)
                else:
                    // Set Cookie untuk Ujian, disimpan selama 3 Jam
                    set_cookie('doTipe', 4, 9800);
                    set_cookie('doUjian', TRUE, 9800);
                    set_cookie('doAs', $this->session->userdata('username'), 9800);
                    set_cookie('startTime', time(), 9800);
                    $this->load->view('material/ujian_4', $data);
                endif;
            endif;

        } else if($tipe == 5) {
            $checkExam5 = $this->Ujian_model->checkExam(5)->num_rows();
            if($checkExam5 != NULL):
                $data = array(
                    'type' => 'ERROR',
                    'messages' => 'Anda telah mengerjakan ujian ini'
                );
    
                $this->load->view('material/result', $data);
            else:
                $getExam5 = $this->Ujian_model->getExam5()->row();
                $detailExam5 = $this->Ujian_model->getExam(5)->row();
                $data = array(
                    'listExam' => $getExam5,
                    'detailExam' => $detailExam5
                );

                // Jika Ujian telah dimulai (Saved in Cookie)
                if(get_cookie('doUjian') == TRUE && get_cookie('doAs') == $this->session->userdata('username')):
                    $this->load->view('material/ujian_5', $data);

                // Jika Ujian belum dimulai (Create New Cookie)
                else:
                    // Set Cookie untuk Ujian, disimpan selama 3 Jam
                    set_cookie('doTipe', 5, 9800);
                    set_cookie('doUjian', TRUE, 9800);
                    set_cookie('doAs', $this->session->userdata('username'), 9800);
                    set_cookie('startTime', time(), 9800);
                    $this->load->view('material/ujian_5', $data);
                endif;
            endif;
        } else {
            redirect(base_url('Ujian'));
        }
    }

    public function submit($tipe = NULL)
    {
        if(empty($tipe)):
            redirect(site_url('Ujian'));
        endif;

        if($tipe == 1):
            // Mengambil Detail Data dari Ujian Tipe 1
            $detailExam = $this->Ujian_model->getExam(1)->row();
            $jumlah_soal = $detailExam->jumlah_soal;

            $correct = 0;
            $wrong = 0;

            // Perulangan 1: Cek Jawaban Benar atau Salah
            for($i=1; $i <= $jumlah_soal; $i++) {
                $getExam = $this->Ujian_model->getExam1($i)->row();
                $answer = $this->input->post('soal_'.$i, true);

                $getAnswer = $getExam->jawaban;
                if($answer == $getAnswer) {
                    $correct++;
                } else {
                    $wrong++;
                }
            }

            $empty = $jumlah_soal - $correct - $wrong;
            $nilai = $correct * 100 / $jumlah_soal;

            $store = array(
                'id_ujian' => 1,
                'user' => $this->session->userdata('username'),
                'tipe_ujian' => 1,
                'keterangan' => "Ujian Tipe 1. Benar: ".$correct,
                'nilai' => $nilai,
                'created_at' => date('Y-m-d')
            );

            // Submit Nilai ke Database 'Nilai'
            $storeNilai = $this->Ujian_model->storeNilai($store);
            if($storeNilai == TRUE):
                delete_cookie('doAs');
                delete_cookie('doUjian');
                delete_cookie('doTipe');
                delete_cookie('startTime');

                // Kirim Informasi ke Halaman 'Result'
                $data = array(
                    'type' => 'SUCCESS',
                    'id_ujian' => 1,
                    'user' => $this->session->userdata('username'),
                    'tipe_ujian' => 1,
                    'keterangan' => "Jumlah Benar: ".$correct,
                    'nilai' => $nilai,
                    'messages' => 'Nilai Berhasil disimpan ke Database'
                );
                $this->load->view('material/result', $data);

            else:
                // Kirim Informasi ke Halaman 'Result'
                $data = array(
                    'type' => 'ERROR',
                    'messages' => 'Nilai Gagal disimpan ke Database'
                );
                $this->load->view('material/result', $data);
            endif;

        elseif($tipe == 2):
            // Mengambil Detai Ujian dari Ujian Tipe 2
            $detailExam = $this->Ujian_model->getExam(2)->row();
            $jumlah_soal = $detailExam->jumlah_soal;

            $getKepribadian = "Daftar Kepribadian:<br />";

            // Perulangan 2: Mendapatkan Kepribadian Setiap Jawaban
            for($i=1; $i <= $jumlah_soal; $i++) {
                $getExam = $this->Ujian_model->getExam2($i)->row();
                $answer = $this->input->post('soal_'.$i, true);

                if($answer == 'a') {
                    $kep_answer = $getExam->kep_a;
                } else if($answer == 'b') {
                    $kep_answer = $getExam->kep_b;
                } else if($answer == 'c') {
                    $kep_answer = $getExam->kep_c;
                } else if($answer == 'd') {
                    $kep_answer = $getExam->kep_d;
                } else {
                    $kep_answer = 'Tidak Ada Pilihan';
                }
                
                $getKepribadian .= $i.". ".$kep_answer."<br />";
            }

            $store = array(
                'id_ujian' => 2,
                'user' => $this->session->userdata('username'),
                'tipe_ujian' => 2,
                'keterangan' => "Hasil Kepribadian: ".$getKepribadian."<br />",
                'nilai' => 0,
                'created_at' => date('Y-m-d')
            );

            // Submit Nilai ke Database 'Nilai'
            $storeNilai = $this->Ujian_model->storeNilai($store);
            if($storeNilai == TRUE):
                delete_cookie('doAs');
                delete_cookie('doUjian');
                delete_cookie('doTipe');
                delete_cookie('startTime');

                // Kirim Informasi ke Halaman 'Result'
                $data = array(
                    'type' => 'SUCCESS',
                    'id_ujian' => 2,
                    'user' => $this->session->userdata('username'),
                    'tipe_ujian' => 2,
                    'messages' => 'Data Berhasil disimpan ke Database'
                );
                $this->load->view('material/result', $data);

            else:
                // Kirim Informasi ke Halaman 'Result'
                $data = array(
                    'type' => 'ERROR',
                    'messages' => 'Data Gagal disimpan ke Database'
                );
                $this->load->view('material/result', $data);
            endif;

        elseif($tipe == 3):
            $detailExam = $this->Ujian_model->getExam(3)->row();
            $jumlah_soal = $detailExam->jumlah_soal;

            $score = 0;

            // Perulangan 3: Cek Jawaban A, B, C, atau D
            for($i=1; $i <= $jumlah_soal; $i++) {
                $getExam = $this->Ujian_model->getExam3($i)->row();
                $answer = strtoupper($this->input->post('soal_'.$i, true));

                if($answer == "A") { 
                    $score;
                } elseif($answer == "B") {
                    $score += 1;
                } elseif($answer == "C") {
                    $score += 2;
                } elseif($answer == "D") {
                    $score += 3;
                } else {
                    $score;
                }
            }

            // Mengambil Data Keterangan dari Jumlah Skor
            $getRange = $this->Ujian_model->getRange3()->row();

            if($score <= 9) {
                $result = $getRange->range_1;
            } elseif ($score >= 10 && $score <= 20) {
                $result = $getRange->range_2;
            } elseif ($score >= 21 && $score <= 31) {
                $result = $getRange->range_3;
            } elseif ($score >= 32 && $score <= 42) {
                $result = $getRange->range_4;
            } else {
                $result = "Tidak Ada";
            }

            $store = array(
                'id_ujian' => 3,
                'user' => $this->session->userdata('username'),
                'tipe_ujian' => 3,
                'keterangan' => 'Hasil Tes Kepemimpinan: '.$result,
                'nilai' => 0,
                'created_at' => date('Y-m-d')
            );
            // Submit Nilai ke Database 'Nilai'
            $storeNilai = $this->Ujian_model->storeNilai($store);
            if($storeNilai == TRUE):
                delete_cookie('doAs');
                delete_cookie('doUjian');
                delete_cookie('doTipe');
                delete_cookie('startTime');

                // Kirim Informasi ke Halaman 'Result'
                $data = array(
                    'type' => 'SUCCESS',
                    'id_ujian' => 3,
                    'user' => $this->session->userdata('username'),
                    'tipe_ujian' => 3,
                    'keterangan' => 'Hasil Tes Kepemimpinan :'. $result,
                    'nilai' => $score,
                    'messages' => 'Data Berhasil disimpan ke Database'
                );
                $this->load->view('material/result', $data);

            else:
                // Kirim Informasi ke Halaman 'Result'
                $data = array(
                    'type' => 'ERROR',
                    'messages' => 'Data Gagal disimpan ke Database'
                );
                $this->load->view('material/result', $data);
            endif;

        elseif($tipe == 4):
            $detailExam = $this->Ujian_model->getExam(4)->row();
            $jumlah_soal = $detailExam->jumlah_soal;

            $listJawaban = "Daftar Jawaban:<br />";

            // Perulangan 4
            for($i=1; $i <= $jumlah_soal; $i++) {
                $answer = $this->input->post('soal_'.$i, true);
                
                $listJawaban .= $i.". ".$answer."<br />";
            }

            $store = array(
                'id_ujian' => 4,
                'user' => $this->session->userdata('username'),
                'tipe_ujian' => 4,
                'keterangan' => $listJawaban,
                'nilai' => 0,
                'created_at' => date('Y-m-d')
            );

            // Submit Nilai ke Database 'Nilai'
            $storeNilai = $this->Ujian_model->storeNilai($store);
            if($storeNilai == TRUE):
                delete_cookie('doAs');
                delete_cookie('doUjian');
                delete_cookie('doTipe');
                delete_cookie('startTime');

                // Kirim Informasi ke Halaman 'Result'
                $data = array(
                    'type' => 'SUCCESS',
                    'id_ujian' => 4,
                    'user' => $this->session->userdata('username'),
                    'tipe_ujian' => 4,
                    'messages' => 'Data Berhasil disimpan ke Database'
                );
                $this->load->view('material/result', $data);

            else:
                // Kirim Informasi ke Halaman 'Result'
                $data = array(
                    'type' => 'ERROR',
                    'messages' => 'Data Gagal disimpan ke Database'
                );
                $this->load->view('material/result', $data);
            endif;

        elseif($tipe == 5):
            $detailExam = $this->Ujian_model->getExam(5)->row();
            $jumlah_soal = $detailExam->jumlah_soal;

            $essai = $this->input->post('essai');

            $data = array(
                'id_ujian' => 5,
                'user' => $this->session->userdata('username'),
                'isi' => $essai,
                'created_at' => date('Y-m-d H:i:s')
            );
            $this->Ujian_model->storeEsai($data);

            delete_cookie('doAs');
            delete_cookie('doUjian');
            delete_cookie('doTipe');
            delete_cookie('startTime');

            // Kirim Informasi ke Halaman 'Result'
            $data = array(
                'type' => 'SUCCESS',
                'id_ujian' => 5,
                'user' => $this->session->userdata('username'),
                'tipe_ujian' => 5,
                'keterangan' => 'Tidak Ada',
                'nilai' => 0,
                'messages' => 'Esai anda berhasil disimpan ke Database'
            );
            $this->load->view('material/result', $data);
        else:
            // Kirim Informasi ke Halaman 'Result'
            $data = array(
                'type' => 'ERROR',
                'messages' => 'Esai anda gagal disimpan ke Database'
            );
            $this->load->view('material/result', $data);
        endif;

    }
    
 }