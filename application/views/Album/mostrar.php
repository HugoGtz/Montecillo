		
		<script>
			
			$(document).ready(function() {
    $(".borrar").click(function() {
      var id = $(this).attr('alt');
          var b = "."+id;


      swal({   title: "¿Esta Seguro de Borrar esta foto?", 
        text: "¿Vamo a Borrar esta foto?", 
        type: "info",   
        showCancelButton: true,  
        closeOnConfirm: false, 
        showLoaderOnConfirm: true,
        animation: true,
      }, 
      function(){ 
       setTimeout(function(){  
         $.get('<?php echo base_url('album/eliminarI') ?>', {id: id}, function(data) {

          });
          $(b).delay(1500).fadeOut('fast');

        swal("Foto Borrada");


      }, 2000);


     });





   

    });

  });
		</script>
    <div class="container">
      
    <div class="row">
    <h3 class="center">Borrar Fotos</h3>
      <?php 
       $ruta = base_url('uploads');
      foreach ($imgs as $item) { ?>
                <?php if ($item->imagen != 'defecto.jpg'): ?>
                            <div style="width: 150px;" class="card left <?php echo $item->idimagen ?>">
    <div class="card-image waves-effect waves-block waves-light">
        <img src=" <?php echo $ruta.'/'.$item->imagen ?> "  style="height: 170px;"  alt="" class="activator ">
    </div>
    <div class="card-content">
    
      <p><a style="cursor: pointer;" class="btn borrar" alt="<?php echo $item->idimagen ?>">Borrar</a></p>
    </div>
  
  </div>
                <?php endif ?>


      <?php } ?>
    </div>
  </div>
    </div>