<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    public function index() {
        $this->load->view('contato');
    }

    public function enviar() {
        // Recebe os dados do formulário via POST
        $nome = $this->input->post('nome');
        $email = $this->input->post('email');
        $mensagem = $this->input->post('mensagem');
    
        // Carrega a biblioteca de banco de dados
        $this->load->database();
    
        // Monta os dados a serem inseridos
        $dados = array(
            'nome' => $nome,
            'email' => $email,
            'mensagem' => $mensagem
        );
    
        // Tenta inserir os dados no banco
        if ($this->db->insert('contatos', $dados)) {
            // Sucesso
            $data['mensagem'] = "✅ Mensagem enviada com sucesso!";
        } else {
            // Erro
            $data['mensagem'] = "❌ Erro ao enviar mensagem. Tente novamente.";
        }
    
        // Carrega a view de confirmação passando a mensagem
        $this->load->view('confirmacao', $data);
    }
}