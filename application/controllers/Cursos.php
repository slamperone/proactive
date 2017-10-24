<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {

	public function index()
	{
		$data['titulo'] = "Programas, seminarios, cursos, talleres y conferencias de capacitación";
		$data['breadcrumbs']  = array('inicio','cursos' );
		$data['menu'] = 'cursos';
		$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');

		$this->load->view('top',$data);
		$this->load->view('cursos');
		$this->load->view('bottom');
	}
}
