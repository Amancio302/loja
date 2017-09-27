<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	 private $categorias;
     public function __construct(){
         parent::__construct();
         $this->load->model('categorias_model','modelcategorias');
         $this->categorias = $this->modelcategorias->listar_categorias();
     }

	public function index()
	{
        $this->load->helper('text');
        $this->load->model('produtos_model','modelprodutos');
        $data_header['categorias'] = $this->categorias;
        $data_body['destaques'] = $this->modelprodutos->destaques_home();
		$this->load->view('html-header');
		$this->load->view('header',$data_header);
		$this->load->view('home',$data_body);
		$this->load->view('footer');
		$this->load->view('html-footer');
	}

    public function buscar(){
        $this->load->helper('text');
        $this->load->model('produtos_model','modelprodutos');
        $data_header['categorias'] = $this->categorias;
        $busca = $this->input->post('txt_busca');
        $data_body['termo'] = $busca;
        $data_body['destaques'] = $this->modelprodutos->busca($busca);
		$this->load->view('html-header');
		$this->load->view('header',$data_header);
		$this->load->view('home',$data_body);
		$this->load->view('footer');
		$this->load->view('html-footer');
    }
    public function fale_conosco(){
    	$data_header['categorias'] = $this->categorias;
    	$this->load->helper('form');
    	$this->load->view('html-header');
		$this->load->view('header',$data_header);
		$this->load->view('fale_conosco');
		$this->load->view('footer');
		$this->load->view('html-footer');
    }
    public function enviar_mensagem(){
 		
		$mensagem ="Nome : ".$this->input->post('txt_nome').br();
		$mensagem.="E-mail : ".$this->input->post('txt_email').br();
 		$mensagem.="Mensagem: ".$this->input->post('txt_mensagem').br();
 		$this->load->library('email');
 		$this->email->from("adriene.maria.cefet@gmail.com","Formulário do website");
 		$this->email->to("adriene.maria.cefet@gmail.com");
 		$this->email->subject('Assunto do e-mail , enviado pelo CodeIgniter');
 		$this->email->message($mensagem);
 			if($this->email->send()){
 					$this->load->view('sucesso_envia_contato');
			}
 			else{
 					print_r( $this->email->print_debugger());
 			}		
 	 }
}
