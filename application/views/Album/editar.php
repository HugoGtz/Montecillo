   		<div class="container">
         <div class="row">
          
           <h1>Editar Album</h1>
           
         </div>

         <div class=" row ">
           <?php 
           foreach ($album as $key ) {
             # code...
             echo form_open("/Album/update", array('class' => ' col s12'))
             
             ?>
             
             <div class="row">
               <div class="input-field ">
                 <i class="material-icons prefix">perm_media</i>
                 <label class="icon_prefix"  > Nombre De Album </label>
                 <input class="icon_prefix" type="text" name="nombre" value="<?php echo $key->NombreAlbum;?>" >
               </div>
               <div class="input-field ">
                 <i class="material-icons prefix">label_outline</i>
                 <label class="icon_telephonel" >Descripción del Album</label>
                 <input class="icon_telephonel" type="text" name="descripcion" value="<?php echo $key->DescripcionAlbum ?>"  >

               </div>

               <div class="input-field ">
                <input hidden="true" type="number" name="id" value="<?php echo $key->IdAlbum ?>">
                

              </div>

            </div>

            <input class="btn btn-success col offset-s5" type="submit" value="Editar Album">
            
            <?php  echo form_close(); }?>
          </div>
          
        </div>
        

