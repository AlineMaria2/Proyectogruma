<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prensa extends CI_Controller {

    public function index() {
        $this->load->view('secciones/header');
        $this->load->view('paginas/sala_prensa');
        $this->load->view('secciones/footer');
    }
}
