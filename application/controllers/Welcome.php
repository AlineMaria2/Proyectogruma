<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property CI_Loader $load
 * @property Pagina_model $mp
 * @property Banner_model $Banner_model
 * @property Marcas_model $Marcas_model
 * @property Historia_model $Historia_model
 * @property Filosofia_model $Filosofia_model
 */
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	    {
        $this->load->model('Banner_model');

        $data['banner'] = $this->Banner_model->obtener_banner();
		$this->load->model('Marcas_model');
		$this->load->model('Marcas_model');
		$data['marcas'] = $this->Marcas_model->obtener_marcas();
		$this->load->model('Historia_model');
		$data['acerca'] = $this->Historia_model->obtener_acerca();
		$this->load->model('Historia_model');
		$data['timeline'] = $this->Historia_model->obtener_timeline();
		$this->load->model('Filosofia_model');
		$data['pilares'] = $this->Filosofia_model->obtener_pilares();
		$data['valores'] = $this->Filosofia_model->obtener_valores();
		

        $this->load->view('secciones/header');
        $this->load->view('secciones/banner', $data);
		$this->load->view('secciones/marcas',$data);
		$this->load->view('secciones/acerca',$data);
		$this->load->view('secciones/timeline',$data);
		$this->load->view('secciones/filosofia',$data);
		$this->load->view('secciones/valores',$data);
		$this->load->view('secciones/mapa');
        $this->load->view('secciones/footer');
    }

	    public function conocenos()
    {
        $this->load->view('secciones/header');
        $this->load->view('paginas/conocenos');
        $this->load->view('secciones/footer');
    }


}

