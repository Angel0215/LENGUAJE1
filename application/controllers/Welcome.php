<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Persona');
		
	}

	public function index(){
		$datos['personas'] = $this->Persona->seleccionar_todo();
		 
		$this->load->view('menu/header.php');
		$this->load->view('menu/redes.php');
		$this->load->view('welcome_message', $datos);
		$this->load->view('menu/footer.php');
	}

	public function agregar() {
		$persona['nombre'] = $this->input->post('nombre');
		$persona['primerapellido'] = $this->input->post('primerapellido');
		$persona['segundoapellido'] = $this->input->post('segundoapellido');
		$persona['fechanacimiento'] = $this->input->post('fechanacimiento');
		$persona['genero'] = $this->input->post('genero');
		$persona['celular'] = $this->input->post('celular');
		
		$this->Persona->agregar($persona);
		redirect('welcome');
	}
	
	public function eliminar($id_persona){
		$this->Persona->eliminar($id_persona);
		redirect('welcome');
	}

	public function editar($id_persona){
		$persona['nombre'] = $this->input->post('nombre');
		$persona['primerapellido'] = $this->input->post('primerapellido');
		$persona['segundoapellido'] = $this->input->post('segundoapellido');
		$persona['fechanacimiento'] = $this->input->post('fechanacimiento');
		$persona['genero'] = $this->input->post('genero');
		$persona['celular'] = $this->input->post('celular');
		
		$this->Persona->actualizar($persona, $id_persona);
		redirect('welcome');
	}
}


