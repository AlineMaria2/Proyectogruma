<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property CI_Loader $load
 * @property Productos_model $Productos_model
 */
class Productos extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Productos_model');
    }

    public function index(){

    $marcas = $this->Productos_model->obtener_marcas();
    foreach($marcas as $m){
    $m->productos = $this->Productos_model->obtener_productos_marca($m->id);
    }

    $data['marcas'] = $marcas;

    $this->load->view('secciones/header');
    $this->load->view('productos/productos',$data);
    $this->load->view('secciones/footer');

}

    public function detalle($id){

    $producto = $this->Productos_model->obtener_producto($id);

    if(!$producto){
        show_404();
    }

    $data['producto'] = $producto;

    $this->load->view('secciones/header');
    $this->load->view('productos/detalle_producto',$data);
    $this->load->view('secciones/footer');
}
}