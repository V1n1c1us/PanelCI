<?

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logado')){
            redirect(base_url('admin/login'));
        }
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

}

/* End of file Cliente.php */


?>