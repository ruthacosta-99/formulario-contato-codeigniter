<?php
class Contato_model extends CI_Model {

    public function salvar($dados) {
        $url = 'http://localhost:3000/contatos'; // endpoint da sua API NestJS

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dados));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);

        $resposta = curl_exec($ch);
        curl_close($ch);

        return $resposta;
    }
}