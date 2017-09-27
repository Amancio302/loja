<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Categorias extends CI_Controller{
        private $categorias;

        public function __construct(){
            parent::__construct();
            $this->load->model('categorias_model','modelcategorias');
            $this->categorias = $this->modelcategorias->listar_categorias();
        }

        public function index(){
            $this->load->helper('text');
            $data_header['categorias'] = $this->categorias;
            $data_pagina['categorias'] = $this->categorias;
            $this->load->view('html-header');
            $this->load->view('header',$data_header);
            $this->load->view('categorias',$data_pagina);
            $this->load->view('footer');
            $this->load->view('html-footer');
        }

        public function categoria($id,$slug = null) {
            $this->load->helper('text');
            $data_header['categorias'] = $this->categorias;
            $data_pagina['categoria'] = $this->modelcategorias->listar_produtos_categoria($id);
            $this->load->view('html-header');
            $this->load->view('header',$data_header);
            $this->load->view('categoria',$data_pagina);
            $this->load->view('footer');
            $this->load->view('html-footer');
        }

        public function excluir($id){
            $this->db->from("produtos_categoria");
            $this->db->where("categoria", $id);
            $cont = $this->db->get()->result();
            if(!empty($cont)){
                echo "<script language='javascript'>alert('Não é possível excluir a categoria. Há produtos vinculados');
                location.href = 'http://localhost/loja/cadastro/categorias';</script>";
            }
            else{
                $this->db->delete('categorias', array('id' => $id));
                redirect(base_url("cadastro/categorias"));
            }
        }

        public function editar($id){
            $data_header['categorias'] = $this->categorias;
            $this->db->from("categorias");
            $this->db->where("id", $id);
            $data['categorias'] = $this->db->get()->result();
            $this->load->view('html-header');
            $this->load->view('administrador/header-adm', $data_header);
            $this->load->view('editar_item', $data);
            $this->load->view('footer');
            $this->load->view('html-footer');
        }

        public function novo_item(){
            $data_header['categorias'] = $this->categorias;
            $this->load->view('html-header');
            $this->load->view('administrador/header-adm', $data_header);
            $this->load->view('novo_item');
            $this->load->view('footer');
            $this->load->view('html-footer');
        }
    }

