<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Propriedade_Model extends CI_Model {

    public $id;
    public $nome;
    public $descricao;
    public $localizacao;
    public $cidade;
    public $quartos;
    public $banheiros;
    public $garagem;
    public $area;
    public $id_cliente;
    public $id_categoria;
    public $foto;
  


    public function cadastra($nome, $descricao, $localizacao, $cidade, $quartos, $banheiros, $garagem, $area, $id_cliente, $id_categoria){

        $this->db->set('nome', $nome);
        $this->db->set('descricao', $descricao);
        $this->db->set('localizacao', $localizacao);
        $this->db->set('cidade', $cidade);
        $this->db->set('quartos', $quartos);       
        $this->db->set('banheiros', $banheiros);
        $this->db->set('garagem', $garagem);
        $this->db->set('area', $area);
        $this->db->set('id_cliente', $id_cliente);
        $this->db->set('id_categoria', $id_categoria);
        $this->db->insert('propriedade');
        $id = $this->db->insert_id();
        return $id;    
    }

     public function cadastraFoto($foto, $tipoImg, $id){
                
                $this->db->set('img', $foto);
                $this->db->set('id_propriedade', $id);
                $this->db->set('tipo', $tipoImg);
                $this->db->insert('imagens');
    }
     public function listar_propriedades()
     {
         $this->db->select('*');
         $this->db->from('propriedade');
         $this->db->order_by('id','ASC');
         return $this->db->get()->result();
     }
}

/* End of file ModelName.php */

?>
