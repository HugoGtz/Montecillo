<?php 

class Contacto extends CI_Controller
{
public $error = null;

	function __construct()
	{
		parent::__construct();

	}
	public function index()
	{     
		$this->load->view('header', array ('pagina' => ' Contacto'));
		$this->load->view('Contacto/index',array('error' => $this->error,));
		$this->load->view('footer');

	}
	public function sendMail()
	{
		$nombre  = $this->input->post('nombre');
		$telefono  = $this->input->post('telefono');
		$email   = $this->input->post('email');
		$mensaje = $this->input->post('mensaje');
        $mns = $mensaje."  Telefono de ".$nombre." = ".$telefono." Correo de ".$nombre."  =  ".$email;
        $asunto = $nombre.' Desea Contactarse Con Tigo Atraves de Tu Pagina Web.';
		$this->email->initialize();

		$this->email->from($email);
		$this->email->to('arnoldohugo@gmail.com','Hugo Gutierrez');
		$this->email->subject($asunto);
		$this->email->message($mns);
		if ($this->email->send()) {
			redirect('');
		}else{
			$this->error = "No se puede enviar el correo";
			redirect('Contacto');
		}




	}






}

?>