<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
        
    public function index() {
	$data = array('title'=>'KostLine.com',
		'isi' 	=> 'login_view');
	$this->load->view('layout/wrapper_login', $data);
	}
}
