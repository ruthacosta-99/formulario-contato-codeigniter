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

        // Monta os dados a serem enviados
        $dados = array(
            'nome' => $nome,
            'email' => $email,
            'mensagem' => $mensagem
        );

        // Envia os dados para a API NestJS
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://localhost:3000/contatos",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($dados),
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            $data['mensagem'] = "❌ Erro ao enviar mensagem: $err";
        } else {
            $data['mensagem'] = "✅ Mensagem enviada com sucesso pela API!";
        }

        // Carrega a view de confirmação passando a mensagem
        $this->load->view('confirmacao', $data);
    }
}