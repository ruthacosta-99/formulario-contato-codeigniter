# Formulário de Contato - ZapIT Etapa 1

Este projeto é um formulário de contato criado com:

- HTML + CSS
- Bootstrap 3
- jQuery
- PHP (CodeIgniter)
- Banco de Dados MySQL

## Funcionalidades

- Envio de nome, email e mensagem.
- Armazenamento automático dos dados no banco de dados `zapit_contatos`.
- Validação básica de campos obrigatórios.
- Tela de confirmação estilizada com Bootstrap.

## Como rodar o projeto

1. Instale o [XAMPP](https://www.apachefriends.org/pt_br/index.html).
2. Clone este repositório na pasta `htdocs`.
3. Crie um banco chamado `zapit_contatos` no phpMyAdmin.
4. Crie a tabela `contatos` com os campos:
    - id (INT, auto increment, chave primária)
    - nome (VARCHAR)
    - email (VARCHAR)
    - mensagem (TEXT)
5. Acesse no navegador: `http://localhost/zapit_etapa1/index.php/contato`

## Créditos

Feito por Ruth Costa, como parte do desafio ZapIT.