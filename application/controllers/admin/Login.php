<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 12/09/2017
 * Time: 23:23
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $dados = array(
            'title' => 'Painel',
            'titleB' => 'Administrativo',
            'boasVindas' => 'Bem Vindo',
            'version' => '1.0.0'
        );

        $this->load->view('backend/template_login/header', $dados);
        $this->load->view('backend/login');
        $this->load->view('backend/template/footer');
    }

    public function logar(){

        $this->load->library('form_validation');

        $this->form_validation->set_rules('txt-user','Nome do Usuário','required|min_length[3]');
        $this->form_validation->set_rules('txt-password','Senha do Usuário','required|min_length[3]');

        if ($this->form_validation->run() == FALSE)
        {
                $this->index();
        }
        else
        {
            //recebe dados do form
            $user = $this->input->post('txt-user');
            $password = $this->input->post('txt-password');
            //compara os dados do form com o db
            $this->db->where('user',$user);
            $this->db->where('senha', $password);
            //recebe os dados do banco
            $userLogado = $this->db->get('usuario')->result();
            //conseguiu resgatar um usuário e senha iguais?
            if(count($userLogado) == 1){
                $dadosSessao = array(
                    'userLogado' => $userLogado[0],
                    'logado' => TRUE
                    /*,
                    'img' => userLogado('img')*/
                );
                $this->session->set_userdata($dadosSessao);
                redirect(base_url('admin/home'));
                
            }else{
                $dadosSessao = array(
                    'userLogado' => NULL,
                    'logado' => FALSE
                );
                $this->session->set_userdata($dadosSessao);
                redirect(base_url('admin/login'));
            }

        }
    }

    public function logout(){
        $dadosSessao = array(
            'userLogado' => NULL,
            'logado' => FALSE
        );
        $this->session->set_userdata($dadosSessao);
        redirect(base_url('admin/login'));
    }
}

?>