<?php 
class Album_model extends CI_Model {

   function __construct(){
      parent::__construct();
      $this->load->database();
   }

   public function nuevo($data){

   	$this->db->insert('Album', array('NombreAlbum'=>$data['nombre'], 'DescripcionAlbum'=>$data['descripcion']));
     $id = $this->db->insert_id();
    $this->db->insert('imagenes', array('titulo'=>'Titulo','imagen'=>'defecto.jpg','IdAlbum'=>$id));
   }

   public function obtenerAlbums(){
      $query = $this->db->get('Album');
      if ($query->num_rows()>0) {
         return $query;
      }
      else{
         return false;
      }
   }


   public function imgAlbum(){
      $this->db->select('*');
      $this->db->from('imagenes');
      $this->db->join('Album','Album.IdAlbum = imagenes.IdAlbum');
      $this->db->order_by('Album.IdAlbum','asc');

      return $query = $this->db->get();
   }

   public function obtenerAlbum($id){
      $this->db->where('IdAlbum',$id);
      $query = $this->db->get('Album');
      if ($query->num_rows()>0) {
         return $query->result();
      }
      else{
         return false;
      }
   }

   public function fotosAlbum($id){
      $this->db->select('*');
      $this->db->from('imagenes');
      $this->db->join('Album','Album.IdAlbum = imagenes.IdAlbum');
      $this->db->where('Album.IdAlbum',$id);
      $this->db->order_by('Album.IdAlbum','asc');
      

      return $query = $this->db->get();
   }

   public function editar($data){

     $this->db->where('IdAlbum', $data['IdAlbum']);
     $this->db->update('Album', $data);
     return true;


  }

  public function eliminarA($id) {
    
   $this->db->where('IdAlbum',$id);
   return $this->db->delete('Album');
}
public function eliminarD($id){
$array = array('IdAlbum' => $id, 'imagen' => 'defecto.jpg');
   $this->db->where($array);
   return $this->db->delete('imagenes');
}

public function eliminarI($id)  {
   $this->db->where('IdAlbum',$id);
   return $this->db->delete('imagenes');
}
public function eliminarIU($id)  {
   $this->db->where('idimagen',$id);
   return $this->db->delete('imagenes');
}
public function all()
{
  return $this->db->get('imagenes')->result();
}
}