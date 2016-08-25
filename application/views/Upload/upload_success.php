<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Tus Fotos Fueron Cargadas Con Exito</h3>

<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>		
<?php endforeach; ?>
</ul>

<p><?php echo anchor('upload', 'Sube mas Imagenes.!'); ?></p>

</body>
</html>	