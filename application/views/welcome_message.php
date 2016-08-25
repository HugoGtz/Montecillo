
<script>
	$(document).ready(function() {

		$('.materialboxed').on('click', 'img', function(event) {
			alert("Hola");
		});
		$('.album2').on('click', function() {
			$('.album').removeClass('active');
			$(this).addClass('active');




			var id = $(this).attr('alt');


			$.get('<?php echo base_url('welcome/all')?>', function(data) {

				var json = JSON.parse(data);
				var html = "";
				var title ="<h5 class='center'>Todas la Galerias</h5>";
				var des = "";
				var ruta = "/M/uploads/";
				var preloader =  ' <div class="progress orange"><div class="indeterminate orange lighten-4	"></div> </div>';
				var preloader2 =  ' <div class="progress blue lighten-3 col s6 offset-s3"><div class="indeterminate blue"></div> </div>';
                    if (json != "") {

                         			for(post in json){
                                       if (json[post].imagen != "defecto.jpg") {
                         	html += '<img  onclick="materialbox()" style="display:inline-block; margin-right:10px; padding:0px; margin-bottom:5px; 	" class="materialboxed col s3 z-depth-2"  src="'+ruta+json[post].imagen+'">'+"";

															}

									}
                    }else{
                    	html += '<div class="row"> <div class="col s12 "> <div class="red card-panel z-depth-2"><span class=" white-text">No Se Encontraron Imagenes<i class="small right material-icons">report_problem</i></span> </div> </div> </div';
                    }
	
                  if (json != "" ) {
                  	    des +='<div class="row"> <div class="col s12 "> <div class="blue card-panel z-depth-2"><span class=" white-text">+Todas las fotos de la DB</span> </div> </div> </div';
                  	
                  }else{
                  	 
                   des +='<div class="row"> <div class="col s12 "> <div class="red card-panel z-depth-2"><p class=" center white-text">No Se Encontraron Registros <i class="small  material-icons">report_problem</i></p> </div> </div> </div';

                  }
           



                $(".nombreA").html(title);
				$(".fotos").html(preloader);
				$(".des").html(preloader2);	

                
				function preload(){
					$(".fotos").html(html);
					$(".des").html(des);


				}
				setTimeout(preload,1000);




			});



		});
		
		
		
		
		
		
		
		
		$('.album').on('click', function() {
			$('.album').removeClass('active');
			$('.album2').removeClass('active');

			$(this).addClass('active');



			var id = $(this).attr('alt');


			$.get('<?php echo base_url('welcome/obtener')?>', {id: id}, function(data) {

				var json = JSON.parse(data);
				var html = "";
				var des = "";
				var title = "";
				var ruta = "/M/uploads/";
				var preloader =  ' <div class="progress orange"><div class="indeterminate orange lighten-4	"></div> </div>';
				var preloader2 =  ' <div class="progress blue lighten-3 col s6 offset-s3"><div class="indeterminate blue"></div> </div>';
                    if (json != "") {

                         			for(post in json){
                         				title = "<h5 class='center'>Geleria "+json[post].NombreAlbum+"</h5>";
                                       if (json[post].imagen != "defecto.jpg") {
                         	html += '<img  onclick="materialbox()" style="display:inline-block; margin-right:10px; padding:0px; margin-bottom:5px; 	" class="materialboxed col s3 z-depth-2"  src="'+ruta+json[post].imagen+'">'+"";
                            
															}else{
																
																	html += '<div class="row"> <div class="col s12 "> <div class="red card-panel z-depth-2"><span class=" white-text">No Se Encontraron Imagenes<i class="small right material-icons">report_problem</i></span> </div> </div> </div';
															}

									}
                    }else{
                    	 
                    	html += '<div class="row"> <div class="col s12 "> <div class="red card-panel z-depth-2"><span class=" white-text">No Se Encontraron Imagenes<i class="small right material-icons">report_problem</i></span> </div> </div> </div';
                    }
	
                  if (json != "" ) {
                  	
                  	    des +='<div class="row"> <div class="col s12 "> <div class="blue card-panel z-depth-2"><span class=" white-text">'+json[post].DescripcionAlbum+'</span> </div> </div> </div';
                  	
                  }else{
                  	 
                   des +='<div class="row"> <div class="col s12 "> <div class="red card-panel z-depth-2"><p class=" center white-text">No Se Encontraron Registros <i class="small  material-icons">report_problem</i></p> </div> </div> </div';

                  }
           

 

             	$(".nombreA").html(title);
				$(".fotos").html(preloader);
				$(".des").html(preloader2);	

                
				function preload(){
				
					$(".fotos").html(html);
					$(".des").html(des);


				}
				setTimeout(preload,1000);




			});



		});
	});


</script>

<div class="container" style="margin-bottom: 350px">
	<div class="col s12">




		<div class="row">




			<div class="col l3 s12">
				<ul class="collection with-header">
					<li class="collection-header center" style="padding-top: 0px;padding-bottom: 0px;margin-top: 0px;margin-bottom: 0px;"><h5>Albums</h5></li>
							<li class="collection-item  album2  "  style="cursor: pointer;" > <p  style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;">Todas  <i class=" material-icons right">
									perm_media</i>
								</p>	</li>

					<?php if($album != null) {
						foreach ($album as $item) {
							?> 

							<li class="collection-item album  "  style="cursor: pointer;" alt="<?php echo $item->IdAlbum ?>">
								<p  style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;"><?php echo $item->NombreAlbum;?>  <i class=" material-icons right">
									perm_media</i>
								</p>
							</li>
                               
							<?php  }
							echo "</ul>";

						}


						else{


							echo   '<div class="" role="alert">Por el momento no hay Albumes disponibles</div>';

						}
						?>
						<script>
							
							function materialbox(){
								 $('.materialboxed').materialbox(); 	
							}
						</script>
					</div>
					<div class="col l6 s12 ">
						<div class="row nombreA">
							<h5 class="center">Galerias Montecillo</h5>
						</div>
					   <div class="fotos">
					     	<h6 class="center">Seleccione un álbum para ver imágenes</h6>
					     	 <i class="large material-icons col l1 offset-l5 m1 offset-m5 s1 offset-s4">web</i>
					     </div>
                         
					</div>

					<div class="col l3 s12">
						<div class="row">
							<h5 class="center" >Descripción Álbum</h5>
						</div>

						<div class="des row"></div>
					</div>


              
				</div>

			</div>
		</div>

		<script> 


		</script>

