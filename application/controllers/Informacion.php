<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informacion extends CI_Controller {

	public function index()
	{
		$data['titulo'] = "Cultura corporativa";
		$data['breadcrumbs']  = array('inicio','informacion','cultura colectiva' );
		$data['menu'] = 'info';
		//$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');
		$this->load->view('top',$data);
		$this->load->view('cultura');
		$this->load->view('bottom');
	}
	public function cultura()
	{
		$data['titulo'] = "Cultura colectiva";
		$data['breadcrumbs']  = array('inicio','informacion','cultura colectiva' );
		$data['menu'] = 'info';
		//$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');
		$this->load->view('top',$data);
		$this->load->view('cultura');
		$this->load->view('bottom');
	}
	public function autonomia()
	{
		$data['titulo'] = "Autonomía de gestión";
		$data['subtitulo'] = "base fundamental para lograr una productividad integral";
		$data['breadcrumbs']  = array('inicio','informacion','autonomía de gestión' );
		$data['menu'] = 'info';
		//$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');
		$this->load->view('top',$data);
		$this->load->view('autonomia');
		$this->load->view('bottom');
	}
	public function dificultades()
	{
		$data['titulo'] = "Las dificultades empresariales";
		$data['breadcrumbs']  = array('inicio','informacion','dificultades empresariales' );
		$data['menu'] = 'info';
		//$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');
		$this->load->view('top',$data);
		$this->load->view('dificultades');
		$this->load->view('bottom');
	}
		public function ruta()
	{
		$data['titulo'] = "Ruta de salida";
		$data['breadcrumbs']  = array('inicio','informacion','ruta de salida' );
		$data['menu'] = 'info';
		//$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');
		$this->load->view('top',$data);
		$this->load->view('ruta');
		$this->load->view('bottom');
	}
	public function beneficios()
	{
		$data['titulo'] = "Beneficios";
		$data['breadcrumbs']  = array('inicio','informacion','beneficios' );
		$data['menu'] = 'info';
		//$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');
		$this->load->view('top',$data);
		$this->load->view('beneficios');
		$this->load->view('bottom');
	}
	public function propuesta()
	{
		$data['titulo'] = "Propuesta de valor ¿Por qué elegir ProActivE?";
		$data['breadcrumbs']  = array('inicio','informacion','propuesta de valor' );
		$data['menu'] = 'info';
		//$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');
		$this->load->view('top',$data);
		$this->load->view('propuesta');
		$this->load->view('bottom');
	}
	public function metodologia()
	{
		$data['titulo'] = "Metodología";
		$data['breadcrumbs']  = array('inicio','informacion','metodología' );
		$data['menu'] = 'info';
		//$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');
		$this->load->view('top',$data);
		$this->load->view('metodo');
		$this->load->view('bottom');
	}
}
