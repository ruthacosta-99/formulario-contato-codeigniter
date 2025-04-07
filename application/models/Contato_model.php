<?php
class Contato_model extends CI_Model {
    
    public function salvar($dados) {
        return $this->db->insert('contatos', $dados);
    }
}