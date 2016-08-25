<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array());
        }
          // funcion index
        public function index()
        {         /* Cargamos la vista Para subir imagenes, y mandamos la variable
                      error en caso de que lo haya.
                                        */
                     
                      $this->load->view('404');
                

        }

          

 function do_upload()
{       
    $this->load->model('upload_model');
    $this->load->model('album_model');

    
  
    $files = $_FILES;
    
    $cpt = count($_FILES['userfile']['name']);
    if($_FILES['userfile']['name'] != null){
          for($i=0; $i<$cpt; $i++)
    {           
        if ($i == 0) {
            $idA = $this->input->post('idalbum');
        }
        $id = $idA;
        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
        $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

        $this->upload->initialize($this->set_upload_options());
        $this->upload->do_upload();
        $upload_data = $this->upload->data(); 
        $nombre = $upload_data['file_name'];
        echo $nombre;
        // llamamos el modelo upload_model con la funcion subir.
        if ($upload_data['file_name'] != null) {
           $this->album_model->eliminarD($id);
        $this->upload_model->subir($nombre,$id); 
        }else{
            redirect('album');
        }
        



    }
    }
  
    redirect(base_url());

}

private function set_upload_options()
{   
    //upload an image options
    $config = array();
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']      = '0';
    $config['overwrite']     = FALSE;

    return $config;
}



          // Funcion upload de fotos al servidor y base de datos.
     
}
?>