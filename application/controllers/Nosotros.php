<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nosotros extends CI_Controller {

	public function index()
	{
		$this->load->view('top');
		$this->load->view('nosotros');
		$this->load->view('bottom');
	}
}
