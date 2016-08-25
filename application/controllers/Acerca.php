<?php 

/**
* 
*/
class Acerca extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}

    public function index($value='')
    {
    		$this->load->view('header', array ('pagina' => ' Acerca De'));
		$this->load->view('Acerca/index');
		$this->load->view('footer');
    }



}

 ?>