<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logado')){
            redirect(base_url('admin/login'));
        }

        $this->load->model('Cliente_Model','modelCliente');
        $this->load->model('Propriedade_Model','modelPropriedade');
    }

    public function index()
    {
        $dados = array(
            'title' => 'Painel Administrativo',
            'boasVindas' => 'Bem Vindo!',
            'version' => '1.0.0',
            'propriedades' => $this->modelPropriedade->listar_propriedades()
        );

        $this->load->view('backend/template/header', $dados);
        $this->load->view('backend/template/aside-left');
        $this->load->view('backend/cadastro_cliente');
        $this->load->view('backend/template/footer');
    }

    public function insert(){

        $nomeCliente = $this->input->post('nomeCliente');
        $sobrenome = $this->input->post('sobrenome');
        $email = $this->input->post('email');
        $telefone = $this->input->post('telefone');
        $endereco = $this->input->post('endereco');
        $cidade = $this->input->post('cidade');
        $cpf = $this->input->post('cpf');
        $id_propriedade = $this->input->post('id_propriedade');

        $this->modelCliente->cadastra($nomeCliente, $sobrenome, $email, $telefone, $endereco, $cidade, $cpf, $id_propriedade);

    }

    public function listaClientes(){
        
                $this->load->library('table');
                
                $dados = array(
                    'title' => 'Painel Administrativo',
                    'titleTable' => 'Clientes Cadastrados',
                    'boasVindas' => 'Bem Vindo!',
                    'version' => '1.0.0',
                    'clientes' => $this->modelCliente->listar_clientes()
                    );
        
                $this->load->view('backend/template/header', $dados);
                $this->load->view('backend/template/aside-left');
                $this->load->view('backend/listaClientes');
                $this->load->view('backend/template/footer');
        
            }

}

/* End of file Cliente.php */


?>
