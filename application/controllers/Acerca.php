<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acerca extends CI_Controller {

	public function index()
	{
		$this->load->view('top');
		$this->load->view('acerca');
		$this->load->view('bottom');
	}
}
