
<?php

class Admin extends CI_Controller {
	  public function __construct()
        {
                parent::__construct();
            }


// Funcion donde tendremos el panel de control

            public function index(){
// cargaremos la vista donde tendremos la interfaz del administrador.

                $this->load->view('header.php', array('pagina' => ' Panel Admin' , ));
            	$this->load->view('/Admin/index.php','');
            	$this->load->view('footer.php');


            }
}
?>