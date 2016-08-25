<?php
defined('BASEPATH') OR exit('No 	direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  
  <title>Montecillo |<?php echo $pagina ?> </title>
  <link rel="shortcut icon" href="./css/favicon.png" /> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

  <link rel="stylesheet" href="/M/css/css/materialize.css">
  <script src="/M/css/js/materialize.js"></script>


  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="/M/css/buttons.css">
<script src="/M/css/sweetalert.min.js"></script> 
<link rel="stylesheet" type="text/css" href="/M/css/sweetalert.css">


</head>
<body>

  <script type="  ">
    $(document).ready(function({

     $('.button-collapse').click(function(){
      $('.button-collapse').sideNav();

    });

  }); // end of document ready


</script> 

<nav class="deep grey darken-4" role="navigation">
  <div class="nav-wrapper container" >
    <a id="logo-container" width="100" href="<?php  echo base_url() ?>" class="brand-logo">

      <div class="col s9 m6 l2 "><img height="70px" width="120" class = "responsive-img" src="/M/css/asdf.png"></div>


    </a>

    <ul class="right hide-on-med-and-down">
        <li><a style ="display: inline-flex" href="<?php  echo base_url('contacto') ?>" class="secondary-item">Contacto <i style ="font-size: 30px; margin-left: 15px;" class="material-icons">perm_identity</i></a></li>
        <li><a style ="display: inline-flex" href="<?php  echo base_url('acerca') ?>" class="secondary-item">Montecillo <i style ="font-size: 25px; margin-left: 10px;" class="material-icons">info_outline</i></a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav" style="transform: translateX(-100%);">
        <li><a style ="width: 240px" href="<?php  echo base_url('contacto') ?>" class="secondary-item">Contacto <i style ="font-size: 30px;" class="material-icons right">perm_identity</i></a></li>
        <li><a style ="width: 240px" href="<?php  echo base_url('acerca') ?>" class="secondary-item">Montecillo <i style ="font-size: 25px;" class="material-icons right">info_outline</i></a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/M/css/js/materialize.js"></script>
  <script src="/M/css/js/init.js"></script>


</nav>
