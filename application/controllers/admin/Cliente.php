<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logado')){
            redirect(base_url('admin/login'));
        }

        $this->load->model('Cliente_Model','modelCliente');
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

        $this->modelCliente->cadastra($nomeCliente, $sobrenome, $email, $telefone, $endereco, $cidade, $cpf);

    }

}

/* End of file Cliente.php */


?>