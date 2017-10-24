<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acerca extends CI_Controller {

	public function index()
	{
		$data['titulo'] = "Acerca de nosotros";
		$data['breadcrumbs']  = array('inicio','acerca' );
		$data['menu'] = 'acerca';
		$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');

		$this->load->view('top',$data);
		$this->load->view('acerca');
		$this->load->view('bottom');
	}
}
