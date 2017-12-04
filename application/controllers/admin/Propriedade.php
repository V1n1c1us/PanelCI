<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Propriedade extends CI_Controller {

    public function __construct(){
		parent::__construct();

        //$this->load->model('Usuario_Model','modelUsuario');
        $this->load->model('Cliente_Model','modelCliente');
        $this->load->model('Categoria_Model','modelCategoria');
        $this->load->model('Propriedade_Model','modelPropriedade');
	}
	public function index()
	{
		$dados = array(
			'title' => 'Painel Administrativo',
			'boasVindas' => 'Bem Vindo!',
            'version' => '1.0.0',
            'clientes' => $this->modelCliente->listar_clientes(),
            'categorias' => $this->modelCategoria->listar_categorias()
            );
            
            $this->load->view('backend/template/header', $dados);
            $this->load->view('backend/template/aside-left');
            $this->load->view('backend/cadastro_propriedade');
            $this->load->view('backend/template/footer');
        
    }

    	/**
     * 
     * @param ARRAY $anexo
     * @return $this->Result
     * Caso seja informado um arquivo para o ticket a função realiza o upload
     */
	 private function UplodAnexo($anexo,$pasta,$id=null) { 
        echo $anexo['tmp_name']." -> ".$anexo['name']." PID: ".$id; 
        $uploadAnexo = ( $anexo['tmp_name'] ? $anexo : null );
        $upload = new Upload();
        $upload->File($uploadAnexo, '', $pasta, 1024);
        $this->Result = $upload->getResult();
        // é preciso aqui salvar a imagem no banco de dados e para isso deverá existir um novo parâmetro que identifique 
        // qual será o ID do imóvel para asssim salvar as imagens para aquele imovel específico
        // você só poderá fazer essa chamada, após obter o ID de retorno do $this->modelPropriedade->cadastra
        // sabendo o ID do imovel cadastrado, você pega o ID através do $last_id = $this->db->insert_id();
        // para poder assim chamar este upload e associar as fotos ao imóvel
        // por isto que só está gravando a última foto upada, pois no campo só permite guardar uma única foto
        // será necessário criar uma tabema 1 para n, para que 1 imóvel tenha n fotos.

        // eu tenho a table propriedade tem 1,N imagens e a tabela imagens tem 1,1 propriedade
        // no model, eu pego o útlimo id da prorpiedade inserido e passo ele pra tabela imagens
        // olha meu model pra vc ver
        $this->modelPropriedade->cadastraFoto($anexo['name'], $anexo['type'],$id);
        
        if (!is_string($this->Result)):
            $this->Result = NULL;
        endif;
        return $this->Result;


        
    }
    
    function reArrayFiles(&$file_post) {
        
            $file_ary = array();
            $file_count = count($file_post['name']);
            $file_keys = array_keys($file_post);
        
            for ($i=0; $i<$file_count; $i++) {
                foreach ($file_keys as $key) {
                    $file_ary[$i][$key] = $file_post[$key][$i];
                }
            }
        
            return $file_ary;
        }
        

    public function insert(){
            


                $nome = $this->input->post('nome');
                $descricao = $this->input->post('descricao');
                $localizacao = $this->input->post('localizacao');
                $cidade = $this->input->post('cidade');
                $quartos = $this->input->post('quartos');
                $banheiros = $this->input->post('banheiros');
                $garagem = $this->input->post('garagem');
                $area = $this->input->post('area');
                $id_cliente = $this->input->post('id_cliente');
                $id_categoria = $this->input->post('id_categoria');
                $pid =  $this->modelPropriedade->cadastra($nome, $descricao, $localizacao, $cidade, $quartos, $banheiros, $garagem, $area, $id_cliente, $id_categoria);
                echo "XYZ:";
                print_r($_FILES['img']);

                $file_ary = $this->reArrayFiles($_FILES['img']);
                
                print_r($file_ary);

                foreach($file_ary as $files){
                   
                    $foto = $this->UplodAnexo($files,'./uploads/',$pid);
                }
                
                //$foto2 = $this->UplodAnexo($_FILES['img2'],'./uploads/');
                $tipoImg = $this->input->post('tipo');
               



       
            
    }

    

}

/* End of file Propriedade.php */


?>
