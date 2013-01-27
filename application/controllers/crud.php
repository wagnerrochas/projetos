<?php

if(!defined('BASEPATH'))
    exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function __construct () {
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index () {

        $dados = array(
            'titulo_pagina' => 'Crud com CI',
            'tela' => '',
        );

        $this->load->view("crud", $dados);
    }

    public function create () {

        //Validação do form

        $this->form_validation->set_rules('nome', 'NOME', 'trim|required|alpha|max_length[50]|ucwords');
        $this->form_validation->set_rules('email', 'EMAIL', 'trim|required|max_length[50]|strtolower|valid_email|is_unique[login.email]');
        $this->form_validation->set_rules('login', 'LOGIN', 'trim|required|max_length[50]strtolower|is_unique[login.login]');
        $this->form_validation->set_rules('senha', 'SENHA', 'trim|required|strtolower');
        $this->
        $this->form_validation->set_rules('senha2', 'REPITA A SENHA', 'trim|required|strtolower|matches[senha]');

        if($this->form_validation->run() == true):
            echo 'ok';
        else:
            echo 'erro';
        endif;

        $dados = array(
            'titulo_pagina' => 'Create',
            'tela' => 'create',
        );

        $this->load->view("crud", $dados);
    }

    public function retrieve () {

        $dados = array(
            'titulo_pagina' => 'Retrieve',
            'tela' => 'retrieve',
        );

        $this->load->view("crud", $dados);
    }

    public function delete () {

        $dados = array(
            'titulo_pagina' => 'Delete',
            'tela' => 'delete',
        );

        $this->load->view("crud", $dados);
    }

    public function update () {

        $dados = array(
            'titulo_pagina' => 'Update',
            'tela' => 'update',
        );

        $this->load->view("crud", $dados);
    }

}