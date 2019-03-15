<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    // Construtor da classe
    public function __construct(){
        parent::__construct();
    }

    // Função que exibe a página inicial.
	public function index()
	{
		$this->load->view('Home');
	}
}
