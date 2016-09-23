<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 
	public function index(){
		//$this->load->view('welcome_message');
		$data['mensagem'] = "Olá mundo!!";
		$this->load->view('ola_mundo', $data);
	}
	*/
	public function index(){
		
		$this->load->view('inicio');
	}
	
	public function cadastro(){
		
		$this->load->helper('form');
		$this->load->view('cadastro');
	}
	
	public function cadastrar_registro(){
		
		$data['nomeArquivo'] = $this->input->post('txt_nome');
		$data['titulo'] = $this->input->post('txt_titulo');
		$data['autores'] = $this->input->post('txt_autores');
		$data['citacoes'] = $this->input->post('txt_citacoes');
		$data['referencias'] = $this->input->post('txt_referencias');
		$data['palavrasChave'] = $this->input->post('txt_palavrasChave');
				
		if($this->db->insert('citacoes', $data)){
			
			redirect(base_url());
		}else{
			
			echo "<script type='text/Javascript'> alert('Erro ao conectar com o banco de dados!')</script>";
			redirect(base_url('cadastrar'));
		}
	}
	
	public function listagem(){
		$data['citacoes'] = $this->db->get('citacoes')->result();
		$this->load->view('listagem', $data);
	}
	
	public function error404(){
		
		$this->load->view('error404');
	}
	
}
