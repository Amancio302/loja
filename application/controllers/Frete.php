<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Frete extends CI_Controller{

        public function listarFretes(){
            $data['frete'] = $this->db->get('tb_transporte_preco')->result();
            $this->load->view('html-header');
            $this->load->view('header');
            $this->load->view('administrador/fretes',$data);
            $this->load->view('footer');
            $this->load->view('html-footer');
        }

        public function excluir($id){
            $this->db->where('tb_transporte_preco.id', $id);
            $this->db->delete('tb_transporte_preco');
            redirect(base_url('frete/listarFretes'));
        }

        public function editar($id){
            $this->db->where('tb_transporte_preco.id', $id);
            $data['frete'] = $this->db->get('tb_transporte_preco')->result();
            $this->load->view('html-header');
            $this->load->view('administrador/header-adm');
            $this->load->view('editar_frete', $data);
            $this->load->view('footer');
            $this->load->view('html-footer');
        }

        public function novo_frete(){
            $this->load->view('html-header');
            $this->load->view('administrador/header-adm');
            $this->load->view('novo_frete');
            $this->load->view('footer');
            $this->load->view('html-footer');
        }

        public function novoItem(){
            $data['peso_de'] = $this->input->post('txt_min');
            $data['peso_ate'] = $this->input->post('txt_max');
            $data['preco'] = $this->input->post('txt_preco');
            $data['adicional_kg'] = $this->input->post('txt_adicional');
            $data['UF'] = $this->input->post('txt_uf');
            $this->db->insert('tb_transporte_preco', $data);
            redirect(base_url('frete/listarFretes'));
        }
        
        public function editarFrete(){
			$id = $this->input->post('txt_id');
			$data['peso_de'] = $this->input->post('txt_min');
			$data['peso_ate'] = $this->input->post('txt_max');
			$data['preco'] = $this->input->post('txt_preco');
			$data['adicional_kg'] = $this->input->post('txt_adicional');
			$data['UF'] = $this->input->post('txt_uf');
			$this->db->where('tb_transporte_preco', $id);
			$this->db->update('tb_transporte_preco', $data);
			redirect(base_url('listarFretes'));
		}

    }
