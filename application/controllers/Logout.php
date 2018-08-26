<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
        $this->session->sess_destroy();
        foreach($_COOKIE AS $key => $value) {
            setcookie($key,$value,TIME()-10000);
        }

        redirect(site_url('Login'));
    }
 }