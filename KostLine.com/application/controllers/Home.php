<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
	$data = array('title'=>'KostLine.com',
		'isi' 		=> 'home/index_home');
	$this->load->view('layout/wrapper', $data);
	}
}