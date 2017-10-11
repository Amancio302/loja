<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Produtos extends CI_Controller{
        public $categorias;
        private $produtos;

        public function __construct(){
            parent::__construct();
            $this->load->model('categorias_model','modelcategorias');
            $this->load->model('produtos_model','modelprodutos');
            $this->categorias = $this->modelcategorias->listar_categorias();
            $this->produtos = $this->modelprodutos->listar_produtos();
        }

        public function index() {
            $this->load->helper('text');
            $data_header['categorias'] = $this->categorias;
            $this->load->view('html-header');
            $this->load->view('header',$data_header);
            $this->load->view('categorias',$data_header);
            $this->load->view('footer');
            $this->load->view('html-footer');
        }

          public function produto($id) {
            $this->load->helper('text');
            $data_header['categorias'] = $this->categorias;
            $data_body['produtos'] = $this->modelprodutos->detalhes_produto($id);
            $this->load->view('html-header');
            $this->load->view('header',$data_header);
            $this->load->view('produto',$data_body);
            $this->load->view('footer');
            $this->load->view('html-footer');
        }

        public function listarProdutos($msg){
            $data_body['produtos'] = $this->produtos;
            $data_body['msg'] = $msg;
            $this->load->view('html-header');
            $this->load->view('administrador/header-adm');
            $this->load->view('administrador/produtos', $data_body);
            $this->load->view('footer');
            $this->load->view('html-footer');
        }

        public function novo_produto(){
            $data_body['categorias'] = $this->categorias;
            $this->load->view('html-header');
            $this->load->view('administrador/header-adm', $data_body);
            $this->load->view('novo_produto');
            $this->load->view('footer');
            $this->load->view('html-footer');
        }

        public function novoItem(){
            $categoria = $this->input->get_post('categoria[]');
            $data['codigo'] = $this->input->post('txt_codigo');
            $data['titulo'] = $this->input->post('txt_titulo');
            $data['preco'] = $this->input->post('txt_preco');
            $data['largura_caixa_mm'] = $this->input->post('txt_largura');
            $data['altura_caixa_mm'] = $this->input->post('txt_altura');
            $data['comprimento_caixa_mm'] = $this->input->post('txt_comprimento');
            $data['peso_gramas'] = $this->input->post('txt_peso');
            $data['descricao'] = $this->input->post('txt_descricao');
            $data['ativo'] = 1;
            $this->load->model('produtos_model','modelprodutos');
            $msg = $this->modelprodutos->inserir_produtos($categoria, $data);
            redirect(base_url('produtos/listarProdutos/'.$msg));
        }

        public function excluir($id){
            $msg = $this->modelprodutos->excluir_produtos($id);
            redirect(base_url('produtos/listarProdutos/'.$msg));
        }

        public function editar($id){
            $data_body['categorias'] = $this->categorias;
            $data['produto'] = $this->modelprodutos->detalhes_produto($id);
            $data['cat'] = $this->modelprodutos->listar_produtos_categoria($id);
            $this->load->view('html-header');
            $this->load->view('administrador/header-adm', $data_body);
            $this->load->view('editar_produto', $data);
            $this->load->view('footer');
            $this->load->view('html-footer');
        }

        public function editarItem(){
            $categoria = $this->input->get_post('categoria[]');
            $data['id'] = $this->input->post('txt_id');
            $data['codigo'] = $this->input->post('txt_codigo');
            $data['titulo'] = $this->input->post('txt_titulo');
            $data['preco'] = $this->input->post('txt_preco');
            $data['largura_caixa_mm'] = $this->input->post('txt_largura');
            $data['altura_caixa_mm'] = $this->input->post('txt_altura');
            $data['comprimento_caixa_mm'] = $this->input->post('txt_comprimento');
            $data['peso_gramas'] = $this->input->post('txt_peso');
            $data['descricao'] = $this->input->post('txt_descricao');
            $data['ativo'] = $this->input->post('txt_ativo');;
            $this->load->model('produtos_model','modelprodutos');
            $msg = $this->modelprodutos->atualizar_produtos($categoria, $data);
            redirect(base_url('produtos/listarProdutos/'.$msg));
        }
    }
