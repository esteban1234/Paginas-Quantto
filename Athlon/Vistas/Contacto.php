<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> ATHLON | PROFESIONALES EN ELECTRÓNICA</title>
  	<link rel="stylesheet" href="../Css/estilos.css">
  	<link rel="stylesheet" href="../Css/responsivo.css">
  	<link href="https://fonts.googleapis.com/css?family=Oswald|Roboto|Roboto+Condensed" rel="stylesheet">
  	<link rel="stylesheet" href="../fonts/style.css">
  </head>
  <body>
    <header>
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="Index.php"><span class="icon-home"></span>&nbsp;INICIO</a></li>
							<li><a href="QuienesSomos.php"><span class="icon-users"></span>&nbsp;QUIENES SOMOS</a></li>
							<li><a href="Servicios.php"><span class="icon-suitcase"></span>&nbsp;SERVICIOS</a></li>
							<li class="active"><a href="Contacto.php"><span class="icon-old-phone"></span>&nbsp;CONTACTO</a></li>
						</ul>
					</nav>
			<!-- Logo -->
					<div id="logo">
						<img class="athlon" src="../Img/ATHLON.png" alt="ATHLON PROFESIONALES EN ELECTRÓNICA">
					</div>
		</header>
    <div class="img-fondo">
      <p class="contacto">Contacto</p>
    </div>
    <p class="texto_servicio"> Para más información acerca de nuestros servicios, por favor contáctenos usando el siguiente formulario y nosotros nos comunicaremos con usted lo más pronto posible.</p>
    <div class="cont-general">
      <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.68913677158716!2d-89.6572816644002!3d21.07161622934872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5675967ce781d1%3A0xdf47a108d1ae6ec8!2sCalle+57%2C+Fraccionamiento+Las+Am%C3%A9ricas%2C+M%C3%A9rida%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1477864507345" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="direccion">
        <div class="texto-direccion">
          <span class="icon-location"></span>
          <div class="dir-text">
            <div>DIRECCION</div>
            <p>Calle 57B Num. 839 entre calle 100 Y 104, COL. Las Americas </p>
          </div>
        </div>
        <div class="texto-direccion">
          <span class="icon-phone"></span>
          <div class="dir-text">
            <div>TELEFONO</div>
            <p>Calle 57B Num. 839 entre calle 100 Y 104, COL. Las Americas </p>
          </div>
        </div>
        <div class="texto-direccion">
          <span class="icon-clock"></span>
          <div class="dir-text">
            <div>HORARIO</div>
            <p>Calle 57B Num. 839 entre calle 100 Y 104, COL. Las Americas </p>
          </div>
        </div>
        <div class="texto-direccion">
          <span class="icon-mail"></span>
          <div class="dir-text">
            <div>CORREO</div>
            <p>Calle 57B Num. 839 entre calle 100 Y 104, COL. Las Americas </p>
          </div>
        </div>
      </div>
    </div>
    <div>
      <form class="" action="" method="post">
        <div class="group-input">
          <div class="input-group">
            <span id="msj"></span>
            <label class="label" for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
          </div>
          <div class="input-group">
            <span id="msj"></span>
            <label class="label" for="nombre">Telefono:</label>
            <input type="text" id="telefono" name="telefono">
          </div>

          <div class="input-group">
            <span id="msj"></span>
            <label class="label" for="nombre">Correo:</label>
            <input type="text" id="correo" name="correo">
          </div>
          <div class="group-comentario">
            <textarea name="name" rows="8" cols="40"></textarea>
          </div>
        </div>
      </form>
    </div>
		<span class="ir-arriba icon-arrow-bold-up"></span>

    <?phpinclude ('Pie.php');   ?>

    <script type="text/javascript" src="../Js/iconoarriba.js"></script>
  	<script type="text/javascript" src="../Js/jquery.js"></script>
  </body>
</html>
