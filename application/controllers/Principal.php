<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->helper('download');
	}

	public function index(){

		$this->load->view('home');

	}


	public function baixarCanvas(){

		force_download('./arquivos/canvas.pdf', NULL);

	}

	public function baixarRelatorio(){

		force_download('./arquivos/relatorio.pdf', NULL);
		
	}
}
