<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_Model extends CI_Model {

    public $id;
    public $nome;


    public function cadastra($nome){
        $dados['nome'] = $nome;
        return $this->db->insert('categoria',$dados); 
    }

    public function listar_categorias()
    {
        $this->db->select();
        $this->db->from('categoria');
        $this->db->order_by('nome','ASC');
        return $this->db->get()->result();
    }
}

/* End of file Categoria.php */

?>