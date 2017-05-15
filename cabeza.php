<!DOCTYPE html>
<html lang="es">
<?php
$title = "DEPORTE Y VIDA SANA";
$descripcion = "Pongan acá su descripción.";
?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo($title);?></title>
<!--acá vamos a meter varios metadatos-->
<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/style.css" rel="stylesheet">
<!-- Search Engine -->
<meta name="description" content="Una serie de artículos para concientizar acerca del deporte y su importancia para tener una vida saludable.">
<meta name="image" content="https://www.saludbook.info/wp-content/uploads/2016/11/deporte-y-vida-sana-la-vida-es-cuca.jpg">
<!-- Schema.org for Google -->
<meta itemprop="name" content="Deporte y vida sana">
<meta itemprop="description" content="Una serie de artículos para concientizar acerca del deporte y su importancia para tener una vida saludable.">
<meta itemprop="image" content="https://www.saludbook.info/wp-content/uploads/2016/11/deporte-y-vida-sana-la-vida-es-cuca.jpg">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Deporte y vida sana">
<meta name="twitter:description" content="Una serie de artículos para concientizar acerca del deporte y su importancia para tener una vida saludable.">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta name="og:title" content="Deporte y vida sana">
<meta name="og:description" content="Una serie de artículos para concientizar acerca del deporte y su importancia para tener una vida saludable.">
<meta name="og:image" content="https://www.saludbook.info/wp-content/uploads/2016/11/deporte-y-vida-sana-la-vida-es-cuca.jpg">
<meta name="og:type" content="website">


<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-10 col-sm-offset-1">
<header>
<div class="masthead clearfix">
<div class="inner">
<h1 class="masthead-brand"><?php echo($title);?></h1>
<nav>
<ul class="nav masthead-nav">
<li<?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?> class="active" <?php };?>><a href="index.php">Portada</a></li>
<li<?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?> class="active" <?php };?>><a href="amigui.php">Datos amigo</a></li>
<li<?php if((basename($_SERVER['PHP_SELF']))=='about.php'){?> class="active" <?php };?>><a href="about.php">Sobre el proyecto</a></li>
</ul>
</nav>
</div>
</div>
<?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?>
  <h2><?php echo($descripcion_index);?></h2>
<?php }else{ ?>
  <h2><?php echo($descripcion_estudiantes);?></h2>
<?php };?>
</header>
