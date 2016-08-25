<?php 
class Upload_model extends CI_Model {

   function __construct(){
      parent::__construct();
   }
        // creamos la funcion subir la cual recibe tres valores 
       function subir($nombre,$id){
         // creamo el array que mandaremos a la base de datos
       	$datos = array(
          'titulo' => 'Titulo',
          'imagen' => $nombre,
          'idAlbum' => $id,
       	 );
           // por ultimo mandamos los datos con un insert a la base datos utilizando el active record de CI
       	$this->db->insert('imagenes',$datos);

       	}

      

   }
 ?>