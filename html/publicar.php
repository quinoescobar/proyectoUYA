<?php
include('../php/session.php');
// echo"Entre a perfil.php";
?>
<!DOCTYPE html>
<html lang="es">
  <head>
		<title>Publicar</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/alu4635/bootstrap-3.3.4/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="/alu4635/bootstrap-3.3.4/js/bootstrap.min.js"></script>
		<link media="screen" href="pag.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/alu4635/js/publicar.js" ></script>
  </head>
  <body>
	<div class="container">
		<div role ="heading" class="Cabecera">
			<div class="row" role="rowgroup">
				<div class="col-sm-12">

					<img src="http://banot.etsii.ull.es/alu4635/images/imagen_azul.png" class="img-rounded img-responsive" aria-describedby="img_cab" alt="imagen_azul_top" width="1200" height="50"><br><br><br>
					<div class="hide" id="img_cab">
					  Imagen de cabecera
					 </div>

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
                        <a href="/alu4635/html/home.php" class="navbar-brand">CompartiendoPiso.com</a>
                    </div>
                    <!-- Collection of nav links and other content for toggling -->
                    <div id="navbarCollapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                          <li><a href="/alu4635/html/home.php">Inicio</a></li>
                          <li><a href="/alu4635/html/busqu.php">Buscar</a></li>
                          <li><a href="/alu4635/html/perfil.php">Perfil</a></li>
                          <li class="active"><a href="/alu4635/html/publicar.php">Publicar</a></li>
                          <li><a href="/alu4635/html/favoritos.php">Favoritos</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a id="welcome">Bienvenido : <i><?php echo $login_session; ?></i></a></li>
                            <li><a href="/alu4635/php/logout.php">Cerra sesión</a></li>
                        </ul>
                    </div>
            </div>
      </nav>
				</div><!-- fin menu navegacion -->
			</div><!-- fin row -->
		</div><!--fin cabecera-->
		<div class="cuerpo" role="main" id="cuerpo">
			<div class="row" role="rowgroup">
				<div class="col-sm-12">
					<form role="form" aria-describedby="form_publicar" id="form_publicar" class="form-horizontal" enctype="multipart/form-data">

						<div class="hide" id="form_publicar" >
							Formulario para introducir los datos de un inmueble y publicarlo en la página.
						</div>

						<div class="form-group">
							<br><br>
							<label id="imagen_publicar" for="imagen">Adjuntar un archivo</label><br><br>
							<input class="btn btn-primary btn-lg" type="file" id="imagen" name="imagen"><br>
							<label id="descripcion_publicar" class="control-label" for="descripcion">Descripción</label>
							<textarea id="descripcion" name="descripcion" class="form-control" placeholder="Añada breve descripción de lo que desea publicar" rows="3"></textarea>
						</div><!--fin adjuntar archivo-->
						<div id="form_zona" class="form-group">
							<label id="zona_publicar" class="control-label" for="zona">Zona</label>

								<select id="zona" name="zona" class="form-control" aria-required="true">
                  <option value=''>Seleccione la zona</option>
									<option value="Finca España">Finca España</option>
									<option value="Geneto">Geneto</option>
									<option value="Gracia">Gracia</option>
									<option value="Guajara">Guajara</option>
									<option value="La Cuesta">La Cuesta</option>
									<option value="Las Chumberas">Las Chumberas</option>
									<option value="La Laguna">La Laguna</option>
									<option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option>
									<option value="Taco">Taco</option>
								</select>
						</div><!--fin zona-->
						<div id="form_precio" class="form-group">
							<label id="precio_publicar" class="control-label" for="precio">Precio €</label>

								<select id="precio" name="precio" class="form-control" aria-required="true">
                  <option value=''>Seleccione el precio</option>
									<option>200</option>
									<option>300</option>
									<option>400</option>
									<option>500</option>
									<option>600</option>
								</select>
						</div><!--fin precio-->
						<div id="form_dormitorio" class="form-group">
							<label id="dormitorio_publicar" class="control-label" for="dormitorios">Dormitorios</label>

								<select id="dormitorios" name="dormitorios" class="form-control" aria-required="true">
                  <option value=''>Seleccione el número de dormitorios</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
						 </div><!--fin dormitorios-->
						 <div id="form_bano" class="form-group">
							<label id="banos_publicar" class="control-label" for="banos">Baños</label>

								<select id="banos" name="banos" class="form-control" aria-required="true">
                  <option value=''>Seleccione el número de baños</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
						</div><!--fin baños-->
					</form>
					<button role="button" aria-describedby="boton_publicar" id="publicar" type="button" class="btn btn-primary btn-lg">Publicar</button>
						<div class="hide" id="boton_publicar">
							Al pulsar en el botón publicar, se sube a la base de datos el inmueble.
						</div>
		 <div class="err" id="add_err"></div>
				</div><!--fin col-->
			</div><!-- fin row-->
		</div><!-- fin cuerpo-->
		<br><br><br><br><br><br>
		<div class="pie">
      <img  aria-describedby="img_pie" src="http://banot.etsii.ull.es/alu4635/images/imagen_azul.png" class="img-responsive img-rounded" alt="imagen_azul_pie" width="1200" height="10"><br><br><br>
		<div class="hide" id="img_pie">
			imagen del pie de la página
		</div>
      <div class="row" role="row">
        <div class="col-sm-4" >
          <!-- <button type="button" class="btn btn-link">Ayuda</button> -->
           <a role = "link" aria-describedby="AYuda" href="/alu4635/html/ayuda.html">Ayuda</a>
		  <div class ="hide" id = "AYuda">
			Enlace para ver preguntas frecuentes que puedan ayudar.
		  </div>
        </div>
        <div class="col-sm-4" >
          <!-- <button type="button" class="btn btn-link">Acerca de</button> -->
            <a role ="link" aria-describedby="COntacto" href="/alu4635/html/contacto.html">Contacto</a>
			<div class ="hide" id = "COntacto">
				Enlace para contactar con el administrador de la página.
		  </div>
        </div>
        <div class="col-sm-4" >
          <!-- <button type="button" class="btn btn-link">Politicas de privacidad</button> -->
             <a role="link" aria-describedby="PPrivacidad" href="/alu4635/html/avisoLegal.html">Politicas de Privacidad</a>
			<div class ="hide" id = "PPrivacidad">
					Enlace para consultar las Politicas de Privacidad de la empresa.
		     </div>
        </div>
      </div>
		</div><!--fin pie-->
	</div><!-- fin container-->
  </body>
  </html>
