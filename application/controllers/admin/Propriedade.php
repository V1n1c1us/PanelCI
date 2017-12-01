<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Propriedade extends CI_Controller {

    public function __construct(){
		parent::__construct();

        //$this->load->model('Usuario_Model','modelUsuario');
        $this->load->model('Cliente_Model','modelCliente');
	}
	public function index()
	{
		$dados = array(
			'title' => 'Painel Administrativo',
			'boasVindas' => 'Bem Vindo!',
            'version' => '1.0.0',
            'clientes' => $this->modelCliente->listar_clientes()
            );
            
            $this->load->view('backend/template/header', $dados);
            $this->load->view('backend/template/aside-left');
            $this->load->view('backend/cadastro_propriedade');
            $this->load->view('backend/template/footer');
        
    }

}

/* End of file Propriedade.php */


?>
