<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CodigoFacilito extends CI_Controller {

	function __construct(){
      parent::__construct();
      $this->load->helper('form');
      $this->load->model('codigofacilito_model');
	}

	function index(){
		$this->load->library('menu',array('Inicio','Contacto','Cursos','Acerca de'));
		$data['mi_menu'] = $this->menu->construirMenu();
		$this->load->view('codigofacilito/header');	
		$this->load->view('codigofacilito/bienvenido',$data);
	}

	function nuevo(){
		$this->load->view('codigofacilito/header');	
		$this->load->view('codigofacilito/formulario');
	}

	function recibirdatos(){

	 $data = array(
	 	'nombre' => $this->input->post('nameCurso'),
	 	'videos' => $this->input->post('videosNumber')

	 );
     
	  $this->codigofacilito_model->crearCurso($data);
	  $this->load->view('codigofacilito/header');
	  $this->load->view('codigofacilito/bienvenido');
	}	

}