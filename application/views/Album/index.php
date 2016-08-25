<script style="display: none;">



	$(document).ready(function() {
    $(".borrar").click(function() {

      
      var id = $(this).attr('alt');
      var b = "."+id;
      swal({   title: "¿Esta Seguro de Borrar este Album?", 
        text: "¿Vamo a Borrar el album?", 
        type: "info",   
        showCancelButton: true,  
        closeOnConfirm: false, 
        showLoaderOnConfirm: true,
        animation: true,
      }, 
      function(){ 
       setTimeout(function(){  
         $.get('<?php echo base_url('album/eliminar') ?>', {id: id}, function(data) {
         });
         $(b).delay(1500).fadeOut('fast');
         swal("Album Borrado");
       }, 2000);
     });
    });

  });
</script>


<div class="container">


	<!-- Modal Structure -->
	<div id="modal1" class="modal modal-fixed-footer">
		<div class="modal-content">
			<h4>Modal Header</h4>
			<p>A bunch of text</p>
		</div>
		<div class="modal-footer ">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat  ">Agree</a>
		</div>
	</div>

	<h2 class="center">Álbumes</h2>
	<a href="<?php echo base_url('album/nuevo') ?>" class="btn-floating btn-large waves-effect waves-light blue z-depth-1" style="margin-bottom: 15px;"><i class="material-icons">add</i></a>
	<div s class="row">

    <?php 
    $baseu =  $base."album/show/";
    $url = "/M/uploads/";
    $url2 = "/M/css/";

    $ant = 0;
    if ($Albums){ ?>

    <?php foreach ($Albums->result() as $album) 
    { 
     ?>
     <?php if ($album->IdAlbum != $ant):
     $ant = $album->IdAlbum;
     ?>


     <div style="max-height:300px; margin-top:10px;" class="col s12 m4 <?php echo $album->IdAlbum ?>" >
      <div class="card  ">
        <div class="card-image">
         <?php if ($album->imagen == 'defecto.jpg'): ?>
          <img class="responsive-img" width="150" src="<?php echo $url2.$album->imagen ?>">
        <?php else: ?>
          <img class="responsive-img" width="150" src="<?php echo $url.$album->imagen ?>">

        <?php endif ?>
         <span  class="card-title  " href="<?php echo $baseu.$album->IdAlbum ?>"> <?php echo $album->NombreAlbum ?></span>
      </div>
      <div class="card-content">
        <p><?php echo $album->DescripcionAlbum ?></p>
      </div>
      <div class="card-action">

        <div class="fixed-action-btn horizontal" style="position: static">
            <a class=" btn-floating btn-large blue" >
              <i class="large material-icons">mode_edit</i>
            </a>
            <ul style="margin-top: 15px; margin">
              <li><a alt="<?php echo $album->IdAlbum ?>" class="btn-floating blue borrar" ><i class="material-icons">delete</i></a></li>
                <li><a href="<?php echo base_url('album/editar/'.$album->IdAlbum) ?>" alt="<?php echo $album->IdAlbum ?>" class="btn-floating orange" ><i class="material-icons">edit</i></a></li>
                 <li><a href="<?php echo base_url('album/show/'.$album->IdAlbum) ?>" alt="<?php echo $album->IdAlbum ?>" class="btn-floating orange" ><i class="material-icons">note_add</i></a></li>
            </ul>
         </div>



     </div>
   </div>
 </div>

<?php    endif 
?>






<?php 
} 
?>
<?php } ?>


</div>

</div>