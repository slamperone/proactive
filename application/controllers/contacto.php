<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

	public function index()
	{
		$this->load->view('top');
		$this->load->view('seguimos');
		$this->load->view('bottom');
	}
}