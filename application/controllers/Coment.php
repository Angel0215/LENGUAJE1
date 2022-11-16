<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coment extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Comenta');
		
	}

	public function index(){
		$datos['comentarios'] = $this->Comenta->seleccionar_todo();
		 
		$this->load->view('menu/header.php');
		$this->load->view('productos/productos.php');
		$this->load->view('comentario', $datos);
		$this->load->view('menu/footer.php');
	}

	public function agregar() {
		$comenta['nombre'] = $this->input->post('nombre');
		$comenta['celular'] = $this->input->post('celular');
		$comenta['correo'] = $this->input->post('correo');
		$comenta['opinion'] = $this->input->post('opinion');

		
		$this->Comenta->agregar($comenta);
		redirect('coment');
	}
	
	public function eliminar($id_comenta){
		$this->Comenta->eliminar($id_comenta);
		redirect('coment');
	}

	public function editar($id_comenta){
		$comenta['nombre'] = $this->input->post('nombre');
		$comenta['celular'] = $this->input->post('celular');
		$comenta['correo'] = $this->input->post('correo');
		$comenta['opinion'] = $this->input->post('opinion');
		
		$this->Comenta->actualizar($comenta, $id_comenta);
		redirect('coment');
	}
}


