<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 12/09/2017
 * Time: 23:23
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logado')){
            redirect(base_url('admin/login'));
        }
    }

    public function index()
    {
        $this->load->model('Usuario_Model','modelUsuario');
        $dados = array(
            'title' => 'Painel Administrativo',
            'boasVindas' => 'Bem Vindo!',
            'version' => '1.0.0'
        );

        $this->load->view('backend/template/header', $dados);
        $this->load->view('backend/template/aside-left');
        $this->load->view('backend/home');
        $this->load->view('backend/template/footer');
    }
}

?>