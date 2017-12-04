<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Categoria extends CI_Controller {
 
      public function __construct(){
        parent::__construct();
        
        $this->load->model('Categoria_Model','modelCategoria');
	}

    public function index()
	{
		$dados = array(
			'title' => 'Painel Administrativo',
			'boasVindas' => 'Bem Vindo!',
            'version' => '1.0.0'
            );
            
            $this->load->view('backend/template/header', $dados);
            $this->load->view('backend/template/aside-left');
            $this->load->view('backend/cadastro_categoria');
            $this->load->view('backend/template/footer');
    }

    public function insert(){
        $nome = $this->input->post('nome');
        $this->modelCategoria->cadastra($nome);

    }
 
 }
 
 /* End of file Categoria.php */
 
?>