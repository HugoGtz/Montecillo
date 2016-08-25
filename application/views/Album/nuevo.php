   		<div class="container">
   		<div class="row">
				
					<h1>Crear Album Nuevo</h1>
			
			</div>

   		<div class=" row ">
   				<?php 
   				
   				
   				echo form_open("/Album/guardar", array('class' => ' col s12'))
   				 
   				?>
   				
   			       <div class="row">
           <div class="input-field ">
               <i class="material-icons prefix">perm_media</i>
               <label class="icon_prefix"  > Nombre De Album </label>
               <input class="icon_prefix" type="text" name="nombre">
            </div>
           <div class="input-field ">
             <i class="material-icons prefix">label_outline</i>
            <label class="icon_telephonel" >Descripción del Album</label>
            <input class="icon_telephonel" type="text" name="descripcion">
             
           </div>
         </div>

               <input class="btn btn-success col offset-s5" type="submit" value="Crear Album">
   				
   				<?php echo form_close() ?>
   			</div>
   			
   		</div>
   	

