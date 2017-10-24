<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {

	public function index()
	{
		$data['titulo'] = "Cursos, talleres y conferencias de capacitación";
		$data['subtitulo'] = "Contamos con un catalogo variado de servicios, orientado a generar una cultura organizacional mas productiva y de calidad, ligada a los objetivos institucionales.
";
		$data['breadcrumbs']  = array('inicio','servicios' );
		$data['menu'] = 'servicios';
		//$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');
		$this->load->view('top',$data);
		$this->load->view('servicios');
		$this->load->view('bottom');
	}
}
