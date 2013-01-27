<?php

if(!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inicial extends CI_Controller {

    public function index () {

        $dados = array(
            'titulo_pagina' => 'Contatos de Pullin',
            'view_principal' => 'home',
        );

        $this->load->view("inicial", $dados);
    }

    public function login () {

        $dados = array(
            'titulo_pagina' => 'Acesso ao sistema',
            'view_principal' => 'login',
        );

        $this->load->view("inicial", $dados);
    }

}