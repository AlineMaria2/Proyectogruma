<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property CI_Loader $load
 * @property CI_Input $input
 * @property CI_Session $session
 * @property Productos_model $Productos_model
 * @property Historia_model $Historia_model
 * @property Filosofia_model $Filosofia_model
 */
class Productos extends CI_Controller {

    public function autocomplete() {
    $q = $this->input->get('q');
    if (strlen($q) > 0) {
        $resultados = $this->Productos_model->autocomplete($q);
        echo json_encode($resultados);
    }
}

    public function __construct(){
        parent::__construct();
        $this->load->model('Productos_model');
        
        // Asegurar session y helpers necesarios
        $this->load->library('session');
        $this->load->helper('url');
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

    

    /* === FUNCIÓN PARA INVERSIONISTAS === */
    public function inversionistas() {
        $this->load->view('secciones/header');
        $this->load->view('paginas/inversionistas'); 
        $this->load->view('secciones/footer');
    }

    /* === NUEVA FUNCIÓN PARA SOMOS GRUMA (CONOCENOS) === */
    public function conocenos() {
        $this->load->view('secciones/header');
        $this->load->view('paginas/conocenos'); 
        $this->load->view('secciones/footer');
    }

    public function innovacion() {
        $this->load->view('secciones/header');
        $this->load->view('paginas/innovacion');
        $this->load->view('secciones/footer');
    }

    /* === FUNCIÓN PARA SUSTENTABILIDAD === */
    public function sustentabilidad() {
        $this->load->view('secciones/header');
        $this->load->view('paginas/sustentabilidad'); 
        $this->load->view('secciones/footer');
    }

    /* === FUNCIÓN DE BÚSQUEDA CORREGIDA === */
    public function buscar() {
        $query = $this->input->get('query');
        
        if (empty($query)) {
            redirect(base_url());
        }

        $this->load->model('Historia_model', 'Historia_model');
        $this->load->model('Filosofia_model', 'Filosofia_model');
        $this->load->model('Productos_model', 'Productos_model');

        $data['resultados_historia'] = $this->Historia_model->buscar($query);
        $data['resultados_filosofia'] = $this->Filosofia_model->buscar($query);
        $data['resultados_productos'] = $this->Productos_model->buscar($query);
        
        $data['busqueda'] = $query;

        $this->load->view('secciones/header');
        $this->load->view('productos/resultados', $data);
        $this->load->view('secciones/footer');
    }

    /* === FUNCIÓN PARA MOSTRAR CONTACTO === */
    public function contacto() {
        $this->load->view('secciones/header');
        $this->load->view('paginas/contacto'); 
        $this->load->view('secciones/footer');
    }

    /* === FUNCIÓN PARA ALTA DE PEDIDOS === */
    public function alta_pedidos() {
        $this->load->model('Productos_model');
        $data['productos'] = $this->Productos_model->obtener_productos();

        $this->load->view('secciones/header');
        $this->load->view('paginas/alta_pedidos', $data); 
        $this->load->view('secciones/footer');
    }

    public function prensa() {
        $data['noticias'] = array(
            array(
                'titulo' => 'EBITDA de Gruma crece 26% en el 1T24',
                'fecha' => '17 / abr. / 2024',
                'extracto' => 'Las operaciones fuera de México impulsaron el crecimiento.'
            ),
            array(
                'titulo' => 'Inversión de 792 MDP en Puebla',
                'fecha' => '27 / feb. / 2024',
                'extracto' => 'Ampliación de planta Mission y nuevo centro de botanas.'
            )
        );

        $this->load->view('secciones/header');
        $this->load->view('paginas/sala_prensa_v', $data); 
        $this->load->view('secciones/footer');
    }

} // FIN DE LA CLASE