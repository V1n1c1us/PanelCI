<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('Usuario_Model','modelUsuario');
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
		$this->load->view('backend/addUser');
		$this->load->view('backend/template/footer');
	}


	/**
     * 
     * @param ARRAY $anexo
     * @return $this->Result
     * Caso seja informado um arquivo para o ticket a função realiza o upload
     */
	 private function UplodAnexo($anexo,$pasta) {        
        $uploadAnexo = ( $anexo['tmp_name'] ? $anexo : null );
        $upload = new Upload();
        $upload->File($uploadAnexo, '', $pasta, 1024);
        $this->Result = $upload->getResult();
        if (!is_string($this->Result)):
            $this->Result = NULL;
        endif;
        return $this->Result;
	}
	

	public function insert(){
		

		$nome = $this->input->post('nome');
		$email =$this->input->post('email');
		$user =$this->input->post('user');
		$senha =$this->input->post('senha');
		$foto = $this->UplodAnexo($_FILES['img'],'./uploads/');
		//$foto =$this->input->post('userfile');

		$this->modelUsuario->cadastra($nome, $email, $user, $senha, $foto);
	}
	
	public function listaUsuarios(){

		$this->load->library('table');
		
		$dados = array(
			'title' => 'Painel Administrativo',
			'boasVindas' => 'Bem Vindo!',
			'version' => '1.0.0',
			'usuarios' => $this->modelUsuario->listar_usuarios()
			);

		$this->load->view('backend/template/header', $dados);
		$this->load->view('backend/template/aside-left');
		$this->load->view('backend/listaUsuarios');
		$this->load->view('backend/template/footer');

	}
}

/* End of file Usuario.php */
/* Location: ./application/controllers/admin/Usuario.php */

?>