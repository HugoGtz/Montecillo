 <script src="<?php echo base_url(); ?>css/fileinput.js" type="text/javascript"></script>
 <link href="<?php echo base_url(); ?>css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
 
 

 		<?php echo form_open_multipart('/upload/do_upload');?>
          
 		<label class="control-label">Seleccione sus Fotos </label>
 		<input id="input-24" name="userfile[]" type="file" draggable="true" multiple class="file-loading">
 		<input class="hide" type="text" name="idalbum" value=" <?php echo $segmento ?> " >  
 		<div id="errorBlock" class="help-block"></div>

 	</form>
 </div>

       

<script>

	$(document).on('ready', function() {
		$("#input-24").fileinput({
			initialPreview: [

			],
			overwriteInitial: false,
			maxFileSize: 100,
			initialCaption: "Montecillo"
		});
	});
</script>
