<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class Produtos_model extends CI_Model {
        public function __construct(){
            parent::__construct();
        }

        public function detalhes_produto($id) {
            $this->db->where('id',$id);
            return $this->db->get('produtos')->result();
        }

        public function destaques_home($quantos = 3){
            $this->db->limit($quantos);
            $this->db->order_by('id','random');
            return $this->db->get('produtos')->result();
        }

        public function busca($buscar){
            $this->db->like('titulo',$buscar);
            $this->db->or_like('descricao',$buscar);
            return $this->db->get('produtos')->result();
        }

        public function listar_produtos(){
            $this->db->order_by('titulo','ASC');
            return $this->db->get('produtos')->result();
        }

        public function inserir_produtos($categorias, $data){
            $msg = true;
            if(!$this->db->insert('produtos', $data))
                $msg = false;
            $this->db->select('produtos.id');
            $this->db->from('produtos');
            $this->db->where('produtos.codigo', $data['codigo']);
            $id = $this->db->get()->result();
            $dat['produto'] = $id[0]->id;
            foreach($categorias as $categoria){
                $dat['categoria'] = $categoria;
                if(!$this->db->insert('produtos_categoria', $dat))
                    $msg = false;
                if(!$msg)
                    return 2;
            }
            return 1;
        }

        public function excluir_produtos($id){
            $this->db->where('produtos_categoria.produto', $id);
            $this->db->delete('produtos_categoria');
            $this->db->where('produtos.id', $id);
            if($this->db->delete('produtos'))
                return 1;
            else
                return 2;
        }

        public function listar_produtos_categoria($id){
            $this->db->where('produtos_categoria.produto', $id);
            return $this->db->get('produtos_categoria')->result();
        }

        public function atualizar_produtos($categorias, $data){
            $msg = true;
            $this->db->where('produtos.id', $data['id']);
            if(!$this->db->update('produtos', $data))
                $msg = false;
            $this->db->where('produtos_categoria.produto', $data['id']);
            if(!$this->db->delete('produtos_categoria'))
                $msg = false;
            $dat['produto'] = $data['id'];
            foreach($categorias as $categoria){
                $dat['categoria'] = $categoria;
                if(!$this->db->insert('produtos_categoria', $dat))
                    $msg = false;
                if(!$msg)
                    return 2;
            }
            return 1;
        }
    }
