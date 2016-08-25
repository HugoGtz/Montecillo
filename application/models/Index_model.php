<?php 
class Index_model extends CI_Model {

 function __construct(){
  parent::__construct();
}


function mostrarAll(){
 $query = $this->db->get('imagenes');

 if ($query->num_rows()>0) 

  return $query->result();

else{
  return false;
}
}

function mostrarAlbums(){
  $query = $this->db->get('Album');
  if ($query->num_rows()>0) 

    return $query->result();

  else{
    return false;
  }
}

function idAlbum(){
   $this->db->select('idAlbum');
   $query =  $this->db->get('Album')->result();


}
function counterAlbum(){

 
  $this->db->select('idimagen,NombreAlbum');
  $this->db->from('imagenes');
  $this->db->join('Album','Album.idAlbum = imagenes.idAlbum');
  return $query = $this->db->get()->result();




}
}


?>