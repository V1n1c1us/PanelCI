<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {

    public $id;
    public $nomeCliente;
    public $sobrenome;
    public $email;
    public $telefone;
    public $endereco;
    public $cidade;
    public $cpf;

    public function __construct(){
        parent::__construct();
    }
    

    public function cadastra($nomeCliente, $sobrenome, $email, $telefone, $endereco, $cidade, $cpf){
         $dados['nomeCliente'] = $nomeCliente; //titulo que vem do fomr na posição título, coluna da tab categoria
         $dados['sobrenome'] = $sobrenome;
         $dados['email'] = $email;
         $dados['telefone'] = $telefone;
         $dados['endereco'] = $endereco;
         $dados['cidade'] = $cidade;
         $dados['cpf'] = $cpf;
         //$dados['img'] = $filePath;
        return $this->db->insert('cliente',$dados); //insere na tabela todos os dados dentro da var $dados
    }

    public function listar_clientes()
    {
        $this->db->select('idCliente,nomeCliente,sobrenome,email,telefone,endereco,cidade,cpf');
        $this->db->from('cliente');
        $this->db->order_by('nomeCliente','ASC');
        return $this->db->get()->result();
    }

}

?>