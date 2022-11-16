<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function index()
	{
		$this->load->view('menu/header.php');
		$this->load->view('productos/productos.php');
		$this->load->view('menu/footer.php');
	}
	public function Consolas()
	{
		$this->load->view('menu/header.php');
		$this->load->view('categorias/consolas.php');
		$this->load->view('menu/footer.php');
	}
	public function Accesorios()
	{
		$this->load->view('menu/header.php');
		$this->load->view('categorias/accesorios.php');
		$this->load->view('menu/footer.php');
	}
	public function Juegos()
	{
		$this->load->view('menu/header.php');
		$this->load->view('categorias/juegos.php');
		$this->load->view('menu/footer.php');
	}
	public function play_cinco()
	{
		$this->load->view('menu/header.php');
		$this->load->view('productos/pscinco.php');
		$this->load->view('menu/footer.php');
	}
	public function Xbox()
	{
		$this->load->view('menu/header.php');
		$this->load->view('productos/xboxs.php');
		$this->load->view('menu/footer.php');
	}
	public function Nintendo()
	{
		$this->load->view('menu/header.php');
		$this->load->view('productos/nintendo.php');
		$this->load->view('menu/footer.php');
	}

}