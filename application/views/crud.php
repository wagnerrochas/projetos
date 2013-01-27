<?php

$this->load->view('includes/cabecalho');
$this->load->view('includes/menu');
if($tela != '')
    $this->load->view('telas/'.$tela);
$this->load->view('includes/rodape');