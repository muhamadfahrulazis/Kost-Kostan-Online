<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
        
    public function index() {
	$data = array('title'=>'KostLine.com',
		'isi' 	=> 'daftar_view');
	$this->load->view('layout/wrapper_daftar', $data);
	}
}
