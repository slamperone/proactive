<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nosotros extends CI_Controller {

	public function index()
	{
		$data['titulo'] = "Nosotros";
		$data['subtitulo'] = "Conoce a nuestro equipo";
		$data['breadcrumbs']  = array('inicio','nosotreos' );
		$data['menu'] = 'nos';
		//$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');
		$this->load->view('top',$data);
		$this->load->view('nosotros');
		$this->load->view('bottom');
	}
}
