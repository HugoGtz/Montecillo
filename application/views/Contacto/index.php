   		<div class="container">
   		<div class="row">
				<?php if ($error != null) {
					?>
					<div class="chip">
					   <?php echo $error ?>
						<i class="material-icons">close</i>
					</div>

					<?php
				} ?>
					<h1 class="center">Contactame</h1>
			
			</div>
		   <div class="row">
        <div class="col l s12 m7 offset-l3 offset-m2">
          <div class="card large">
            <div class="card-image">
              <img src="https://scontent.fpbc1-2.fna.fbcdn.net/hphotos-xpf1/v/t1.0-9/13103307_478909648977099_5981668538194260140_n.jpg?oh=5b10fbd4c8170db9f5fc2d30f8d6f633&oe=57E0B851">
              <span class="card-title">Montecillo</span>
            </div>
            <div class="card-content">
            <section class="left" style="margin-left: 30px;">
            <label class="icon_telephonel" >Email</label>
            <p>digitalmonts@hotmail.com</p>
            </section>
              <section class="left" style="margin-left: 30px;">
            <label class="icon_telephonel" >Tel</label>
            <p>312 301 1902</p>
            </section>
              </section>
        


        
            </div>

            <div class="card-action center">
  <a class="waves-effect waves-light btn modal-trigger blue " href="#modal1">Contactar</a>
           
            </div>
          </div>
        </div>
      </div>

        <!-- Modal Trigger -->

  <!-- Modal Structure -->
  <div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
    
   		<div class=" row ">
   				<?php 
   				
   				
   				echo form_open("/Contacto/sendMail", array('class' => ' col s12'))
   				 
   				?>
   				
   			       <div class="row">
           <div class="input-field ">
               <i class="material-icons prefix">perm_identity</i>
               <label class="icon_prefix"  > Nombre</label>
               <input class="icon_prefix" type="text" name="nombre">
            </div>
           <div class="input-field ">
             <i class="material-icons prefix">phone</i>
            <label class="icon_telephonel" >Telefono</label>
            <input class="icon_telephonel" type="text" name="telefono">
             
           </div>
           <div class="input-field ">
             <i class="material-icons prefix">email</i>
            <label class="icon_telephonel" >Email</label>
            <input class="icon_telephonel" type="text" name="email">
             
           </div>
               <div class="input-field ">
             <i class="material-icons prefix">chat_bubble_outline</i>
            <label class="icon_telephonel" >Mensaje</label>
            <input class="icon_telephonel" type="text" name="mensaje">
             
           </div>
         </div>

              <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
    <i class="material-icons right">send</i>
  </button>
        
   				
   				<?php echo form_close() ?>
   			</div>
  </div>
         

   			
   		</div>
   		</div>

   	<script>
   		  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
   	</script>
