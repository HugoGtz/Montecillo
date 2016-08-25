<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('album_model');

		$this->load->helper('url');
	}
  
        # Vista Principal de albums
	public function index(){

		$data['base']  =  base_url();
		$data ['error'] = 'No se pudo realizar su petision';
	    	// Obtenerel segmento de la url
		$this->load->view('header', array ('pagina' => 'Albums'));


	    		// obtener todos los albums
		$data['Albums'] =  $this->album_model->imgAlbum();

		$this->load->view('Album/index', $data);
		$this->load->view('footer.php');
	}


      # Vista Show de los albums
	public function show(){
		$data['segmento'] = $this->uri->segment(3);
			$data['imgs'] = $this->album_model->fotosAlbum($data['segmento'])->result();
             
			$data['Albums'] =  $this->album_model->obtenerAlbum($data['segmento']);

		if ($data['Albums']!= null) {
			$this->load->view('header', array ('pagina' => 'Album'));
			$this->load->view('Upload/upload_form', $data);
			$this->load->view('Album/mostrar',$data);
			$this->load->view('footer.php');

		}else{
			$this->load->view('404');	    	
		}
	}
     # Vista Editar de los Albums
	public function editar(){
		$data['segmento'] = $this->uri->segment(3);
	    $data['album']= $this->album_model->obtenerAlbum($data['segmento']);

		if ($data['album'] != null) {

			$this->load->view('header',array('pagina' => 'Editar Album'));
			$this->load->view('Album/editar',$data);
			$this->load->view('footer');
		}
		else{
			$this->load->view('404');	    	

		}
	}

     # Vista Nuevo de Album
	public function nuevo(){

		$this->load->view('header', array ('pagina' => 'Crear Nuevo Album'));
		$this->load->view('Album/nuevo');
		$this->load->view('footer.php');
	}

  

    #Create
	public function guardar(){
		$data =  array(
			'nombre' => $this->input->post('nombre'),
			'descripcion' => $this->input->post('descripcion')
			);

		$this->album_model->nuevo($data);
		redirect('Album/index');

		$this->load->view('404');	    	
	}
     #Eliminar
	public function eliminar(){
		$id =  $this->input->get('id');

		$delete =  $this->album_model->eliminarA($id);
		$delete =  $this->album_model->eliminarI($id);
		redirect('Album');
	}
	public function eliminarI(){
		$id =  $this->input->get('id');
		$delete =  $this->album_model->eliminarIU($id);
	}
      #Modificar
	public function update(){
		$data =  array(
			'IdAlbum' => $this->input->post('id'),
			'NombreAlbum' => $this->input->post('nombre'),
			'DescripcionAlbum' => $this->input->post('descripcion')
			);
		$this->album_model->editar($data);
		redirect('album');
		$this->load->view('404');	    	
	}
		



	}






	

