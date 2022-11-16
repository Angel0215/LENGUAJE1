<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bienvenido extends CI_Controller {

	public function index()
	{
		$this->load->view('menu/header.php');
		$this->load->view('menu/inicio.php');
		$this->load->view('menu/footer.php');
	}
	public function Login()
	{
		$this->load->view('menu/header1.php');
		$this->load->view('menu/login.php');
		$this->load->view('menu/footer1.php');
	}
	public function Carrito()
	{
		$this->load->view('menu/header.php');
		$this->load->view('menu/carrito');
		$this->load->view('menu/footer.php');
	}
}