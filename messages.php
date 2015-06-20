<?php
include('session.php');
echo"Entre a perfil.php";
?>
<!DOCTYPE html>


<html lang="es">
  <head>
		<title>Mensajes</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap-3.3.4/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="bootstrap-3.3.4/js/bootstrap.min.js"></script>
		<link media="screen" href="pag.css" type="text/css" rel="stylesheet">
  </head>
  <body>
	<div class="container">
		<div class="cabecera">
			<div class="row" role="rowgroup">
				<div class="col-sm-12">
					<img src="http://usabilidadalu4348.host22.com/bootstrap/cabecera.jpg" class="img-rounded" alt="imagen_azul" width="1200" height="50"><br><br><br>
				</div>
			</div>
			<div class="row" role="rowgroup">
				<div class="col-sm-12">
          <nav role="navigation" class="navbar navbar-default ">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand">BuscandoPiso.com</a>
                    </div>
                    <!-- Collection of nav links and other content for toggling -->
                    <div id="navbarCollapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="/alu4635/busqu.php">Buscar</a></li>
                            <li><a href="/alu4348/perfil.php">Perfil</a></li>
                            <li class="active"><a href="#">Mensajes</a></li>
                            <li><a href="/alu4635/publicar.php">Publicar</a></li>
                            <li><a href="/alu4635/favoritos.php">Favoritos</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a id="welcome">Bienvenido : <i><?php echo $login_session; ?></i></a></li>
                            <li><a href="/alu4635/logout.php">Cerra sesión</a></li>
                        </ul>
                    </div>
            </div>
      </nav>
				</div><!-- fin menu navegacion -->
			</div><!-- fin row -->
		</div><!--fin cabecera-->
		<div class="cuerpo">
			<div class="row" role="rowgroup">
				<div class="col-sm-6">
					<h1>Mensajes</h1>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#">Redactar</a></li>
						<li><a href="#">Recibidos</a></li>
						<li><a href="#">Borradores</a></li>
						<li><a href="#">Enviados</a></li>
					</ul>
				</div><!-- fin col-->
			</div><!--fin row-->
		</div><!-- fin cuerpo-->
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<div class="pie">
			<div class="row" role="row">
				<div class="col-sm-4" >
					<button type="button" class="btn btn-link">Ayuda</button>
				</div>
				<div class="col-sm-4" >
					<button type="button" class="btn btn-link">Acerca de</button>
				</div>
				<div class="col-sm-4" >
					<button type="button" class="btn btn-link">Politicas de privacidad</button>
				</div>
			</div>
		</div><!-- pie-->

  </body>
 </html>