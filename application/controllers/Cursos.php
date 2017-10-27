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

		public function curso1()
	{
		$data['titulo'] = "Programas, seminarios, cursos, talleres y conferencias de capacitación";
		$data['breadcrumbs']  = array('inicio','cursos' );
		$data['menu'] = 'cursos';
		$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');

		$this->load->view('top',$data);
		$this->load->view('cursos');
		$this->load->view('bottom');
	}

		public function curso2()
	{
		$data['titulo'] = "Programas, seminarios, cursos, talleres y conferencias de capacitación";
		$data['breadcrumbs']  = array('inicio','cursos' );
		$data['menu'] = 'cursos';
		$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');

		$this->load->view('top',$data);
		$this->load->view('cursos');
		$this->load->view('bottom');
	}

		public function curso3()
	{
		$data['titulo'] = "Programas, seminarios, cursos, talleres y conferencias de capacitación";
		$data['breadcrumbs']  = array('inicio','cursos' );
		$data['menu'] = 'cursos';
		$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');

		$this->load->view('top',$data);
		$this->load->view('cursos');
		$this->load->view('bottom');
	}

		public function curso4()
	{
		$data['titulo'] = "Programas, seminarios, cursos, talleres y conferencias de capacitación";
		$data['breadcrumbs']  = array('inicio','cursos' );
		$data['menu'] = 'cursos';
		$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');

		$this->load->view('top',$data);
		$this->load->view('cursos');
		$this->load->view('bottom');
	}

		public function curso5()
	{
		$data['titulo'] = "Programas, seminarios, cursos, talleres y conferencias de capacitación";
		$data['breadcrumbs']  = array('inicio','cursos' );
		$data['menu'] = 'cursos';
		$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');

		$this->load->view('top',$data);
		$this->load->view('cursos');
		$this->load->view('bottom');
	}

		public function curso6()
	{
		$data['titulo'] = "Programas, seminarios, cursos, talleres y conferencias de capacitación";
		$data['breadcrumbs']  = array('inicio','cursos' );
		$data['menu'] = 'cursos';
		$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');

		$this->load->view('top',$data);
		$this->load->view('cursos');
		$this->load->view('bottom');
	}

		public function curso7()
	{
		$data['titulo'] = "Programas, seminarios, cursos, talleres y conferencias de capacitación";
		$data['breadcrumbs']  = array('inicio','cursos' );
		$data['menu'] = 'cursos';
		$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');

		$this->load->view('top',$data);
		$this->load->view('cursos');
		$this->load->view('bottom');
	}

		public function estres()
	{
		$data['titulo'] = "Manejo asertivo del Estrés laboral";
		$data['subtitulo'] = '(Relajación, productividad, relaciones)';
		$data['breadcrumbs']  = array('inicio','cursos','estres laboral' );
		$data['menu'] = 'cursos';
		$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');

		$this->load->view('top',$data);
		$this->load->view('estres');
		$this->load->view('bottom');
	}

		public function emociones()
	{
		$data['titulo'] = "Manejo consiente de emociones en el trabajo – estrategia de éxito";
		$data['subtitulo'] = "(Inteligencia emocional, Optimismo, Paz interna)";
		$data['breadcrumbs']  = array('inicio','cursos',"Manejo consiente de emociones en el trabajo" );
		$data['menu'] = 'cursos';
		$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');

		$this->load->view('top',$data);
		$this->load->view('emociones');
		$this->load->view('bottom');
	}

		public function violencia()
	{
		$data['titulo'] = "Violencia laboral (Mobing)";
		$data['breadcrumbs']  = array('inicio','cursos'."Violencia laboral" );
		$data['menu'] = 'cursos';
		$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');

		$this->load->view('top',$data);
		$this->load->view('violencia');
		$this->load->view('bottom');
	}
			public function ambiente()
	{
		$data['titulo'] = "Cursos y talleres para “Ambiente Responsable”
";
		$data['breadcrumbs']  = array('inicio','cursos','Bloque C: “Ambiente Responsable”' );
		$data['menu'] = 'cursos';
		//$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');

		$this->load->view('top',$data);
		$this->load->view('ambiente');
		$this->load->view('bottom');
	}
				public function productividad()
	{
		$data['titulo'] = "“Productividad extraordinaria”";
		$data['breadcrumbs']  = array('inicio','cursos','Bloque B: “Productividad Extraordinaria”' );
		$data['menu'] = 'cursos';
		//$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');

		$this->load->view('top',$data);
		$this->load->view('ambiente');
		$this->load->view('bottom');

}
				public function liderazgo()
	{
		$data['titulo'] = "“Liderazgo exitoso”";
		$data['breadcrumbs']  = array('inicio','cursos','Bloque A: Liderazgo exitoso' );
		$data['menu'] = 'cursos';
		//$data['tags'] = array('empresa','desarrollo humano','terapia','seminario','humanista');

		$this->load->view('top',$data);
		$this->load->view('ambiente');
		$this->load->view('bottom');

}
}
