<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('index_model');
		$this->load->model('album_model');





	}

	

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
		$data['imagenes'] =  $this->index_model->mostrarAll();
		$data['album'] =     $this->index_model->mostrarAlbums();
		$data['cont'] =      $this->index_model->counterAlbum();



		
		$this->load->view('header',array('pagina'=>' Inicio'));
		$this->load->view('welcome_message', $data);
		$this->load->view('footer');

	}

	public function obtener(){
		$id = $this->input->get('id');
       $fotos= $this->album_model->fotosAlbum($id)->result();
        echo json_encode($fotos);

	}

	public function numeroF(){
		
	}
	public function all()
	{
		$id = $this->input->get('id');
		
	$imagenes = $this->album_model->all();
	echo json_encode($imagenes);
	}
}
