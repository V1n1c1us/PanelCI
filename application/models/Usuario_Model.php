<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    public $id;
    public $nome;
    public $email;
    public $img;
    public $user;
    public $senha;

    public function __construct(){
        parent::__construct();
    }
    
    public function buscaPerfil($id){
        $this->db->select('id,nome,email,img');
        $this->db->from('usuario');
        //$this->db->where('id ='.$id);
        return $this->db->get()->result();
    }

    public function listar_usuarios()
    {
        $this->db->select('id,nome,email,img');
        $this->db->from('usuario');
        $this->db->order_by('nome','ASC');
        return $this->db->get()->result();
    }

    public function perfil_usuario($id){
         $this->db->where('id', $id);
        return $this->db->get('usuario')->result();
    }
    public function cadastra($nome, $email, $user, $senha){ //, $foto
         $dados['nome'] = $nome; //titulo que vem do fomr na posição título, coluna da tab categoria
         $dados['email'] = $email;
         $dados['user'] = $user;
         $dados['senha'] = $senha;
         //$dados['img'] = $foto;
         //$dados['img'] = $filePath;
        return $this->db->insert('usuario',$dados); //insere na tabela todos os dados dentro da var $dados
    }
}

?>