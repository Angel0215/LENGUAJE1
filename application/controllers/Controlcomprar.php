<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlcomprar extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Modelcomprar');
		
	}

	public function index(){
		$datos['botoncompra'] = $this->Modelcomprar->seleccionar_todo();
		 
		$this->load->view('menu/header.php');
		$this->load->view('comprar', $datos);
		$this->load->view('menu/footer.php');
	}

	public function agregar() {
		$modelcomprar['tipoproducto'] = $this->input->post('tipoproducto');
		$modelcomprar['nproducto'] = $this->input->post('nproducto');
		$modelcomprar['tipopago'] = $this->input->post('tipopago');
		$modelcomprar['name'] = $this->input->post('name');
		$modelcomprar['contacto'] = $this->input->post('contacto');
		
		$this->Modelcomprar->agregar($modelcomprar);
		redirect('Controlcomprar');
	}
	
	public function eliminar($id_modelcomprar){
		$this->Modelcomprar->eliminar($id_modelcomprar);
		redirect('Controlcomprar');
	}

	public function editar($id_modelcomprar){
		$modelcomprar['tipoproducto'] = $this->input->post('tipoproducto');
		$modelcomprar['nproducto'] = $this->input->post('nproducto');
		$modelcomprar['tipopago'] = $this->input->post('tipopago');
		$modelcomprar['name'] = $this->input->post('name');
		$modelcomprar['contacto'] = $this->input->post('contacto');
		
		$this->Modelcomprar->actualizar($modelcomprar, $id_modelcomprar);
		redirect('Controlcomprar');
	}
}

