<!doctype html>
<html lang="es">
  <head>
      <link rel="stylesheet" href="dist/css/bootstrap.min.css">
      <script src="dist/js/jquery.js"></script>
      <script src="dist/js/bootstrap.min.js"></script>
      <!--Amo a mi familia :3-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!--Propiedad de Cokes Industriales S.A. de C.V.-->
    <title>Cokes Industriales S.A. de C.V.</title>
    <link rel="stylesheet" href="text.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="icon" href="img/CokesL3.png" type="image/png">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--Creada por Diego Rodríguez Velázquez (Estudiante de la UTVAM)-->
    <!--También conocido como Mictian RV o Lokustus Tutoriales-->
    <!--Hello World!...-->
    <style>
    h1.bottomm{
    text-align:justify-all; Font-Size:2.5vw; color:white;}
    </style>
  </head>
  <!--El Top-->
  <body style="background-color:white">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-xs-12" style="background-color:#000340F2;">
            <p>
              <a href="Main.php"><img Src="img/LogoCokesRed.png" align="left" width="180" height="180"></a>
              <p style="color:white; font-size:30px; padding-top:35px;" align="center">COKES INDUSTRIALES
                <h2 style="color:white; font-size:25px;" align="center">Bienvenido</h2>
              </p>
            </p>
    </div>
      <!--Fin Top-->
  <!--Contenido-->
        <!--NAVBAR SALVAJE APARECE-->
            <div class="col-md-12 col-xs-12">
              <nav class="navbar navbar-default navbar-static-top" align="center">
            <div class="navbar-header">
              <p><h4 style="font-size:20px"><p class="glyphicon glyphicon-info-sign" style="font-size:15px;"></p><!--Espaciado Para Acomodar-->      CLICK EN EL RECUADRO PARA MOSTRAR EL MENÚ</h4></p>
              <button type="button" class="navbar-toggle glyphicon glyphicon-chevron-down" data-toggle="collapse"
                          data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Expandir</span>
                  </button>
                </div>
                  <div class="collapse navbar-collapse navbar-ex1-collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white; background-color:black; font-size:15px;">
                        <b>ACCESOS RÁPIDOS </b><b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu" style="font-family:Fira Sans ExtraLight; font-size:14.6px; text-align:right; border-color:#000340F2 ">
                        <li><a href="Noi.php"><b>NOSOTROS</b></a></li>
                        <li><a href="Terminal.php"><b>TERMINAL FERROVIARIA</b></a></li>
                        <li><a href="Bodega.php"><b>BODEGA</b></a></li>
                        <li><a href="Productos.php"><b>PRODUCTOS</b></a></li>
                        <li><a href="Contacto.php"><b>CONTACTO</b></a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                </nav>
              </div>
            <!--FIN NAVBAR-->
  <div class="row">
  <div class="col-md-12 col-xs-12">
    <div id="Carouselbodegayterm" class="carousel slide" data-ride="carousel">
    <!-- Accionadores -->
    <ol class="carousel-indicators">
        <li data-target="#Carouselbodegayterm" data-slide-to="0" class="active"></li>
        <li data-target="#Carouselbodegayterm" data-slide-to="1"></li>
        <li data-target="#Carouselbodegayterm" data-slide-to="2"></li>
    </ol>
    <!-- Contenido en carousel [más circulos] -->
    <div class="row">
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="img/Terminal/terminafade.jpg" alt="Terminal" style="width:100%;" class="img-responsive">
            <div class="carousel-caption col-xs-8" align="right">
                <p align="right"><h3 style="color:#000340F2; font-family:Fira Sans ExtraLight; font-size:4vw; text-align:right;">TERMINAL FERROVIARIA</h3></p>
                <p align="right"><h4 style="color:#000340D9; font-size:2.5vw; text-align:right;"><b>DESCARGA Y MANIOBRA DE<br> CARROS DE FERROCARRIL </b></h4></p>
                <p align="right"><a href="Terminal.php"><button type="default" class="btn" align="right" style="background-color:#000340F2; color:white;">MÁS INFORMACIÓN</button></a></p>
            </div>
        </div>
          <div class="item">
            <img src="img/produitos.jpg" alt="products" style="width:100%;" class="img-responsive">
            <div class="carousel-caption">
                <p align="right"><h3 style="color:#000340F2; font-family:Fira Sans ExtraLight; font-size:3vw; text-align:right;">ASISTENCIA EN</h3></p>
                <p align="right"><h4 style="color:#000340D9; font-size:3vw; text-align:right;"><b>USO DE MATERIALES</b></h4></p>
                <p align="right"><h3 style="color:#000340F2; font-family:Fira Sans ExtraLight; font-size:3vw; text-align:right;">A NUESTROS CLIENTES</h3></p>
                <p align="right"><a href="Productos.php"><button type="default" class="btn" align="right" style="background-color:#000340F2; color:white;">MÁS INFORMACIÓN</button></a></p>
            </div>
        </div>
        <div class="item">
            <img src="img/contactoo.jpg" alt="service" style="width:100%;" class="img-responsive">
            <div class="carousel-caption">
                <p align="left"><h3 style="color:#000340F2; font-family:Fira Sans ExtraLight; font-size:4vw; text-align:left;">PARA ENTREGAS</h3></p>
                <p align="left"><h4 style="color:#000340D9; font-size:4vw; text-align:left;"><b>A DOMICILIO</b></h4></p>
                <p align="left"><a href="Contacto.php"><button type="default" class="btn" align="left" style="border-color:#000340F2; color:#000340; background-color:#FFFFFF">CONTÁCTENOS</button></a></p>
            </div>
        </div>
        <br>
    </div>
  </div>
    <!-- Flechas -->
    <a class="left carousel-control" href="#Carouselbodegayterm" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#Carouselbodegayterm" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>
  <div class="col-md-12 col-xs-12" style="Padding-Top:40px">
    <!--Text0-->
    <div class="col-md-12 col-xs-12">
      <p style="color:#000340D9; font-size:4vw; font-family: Arial Black " align="center"><b>NUESTROS SERVICIOS</b></p>
      <br>
      <span>
      <div class="col-md-3 col-xs-12" align="center">
        <br>
        <img src="img/iconos/tren.png" class="img-responsive">
        <p style="color:#000340D9; font-size:20px; padding-top:5px;" align="center"><b>Terminal Ferroviaria</b></p>
        <p style="font-size:18px; padding-top:5px; text-align:justify;" align="left">A 50 km de la Ciudad de México, nuestra terminal brinda una ubicación estratégica a nuestros clientes. Además, el estar al interior de las instalaciones facilita la manipulación del material o mercancía que se transporta.</p>
      </div>
      <div class="col-md-3 col-xs-12" align="center">
        <br>
        <img src="img/iconos/domici.png" class="img-responsive">
        <p style="color:#000340D9; font-size:20px; padding-top:5px;" align="center"><b>Servicio a Domicilio</b></p>
        <p style="font-size:18px; padding-top:5px; text-align:justify;" align="left">Estamos comprometidos con brindar el mejor servicio a nuestros clientes, es por eso que contamos con la capacidad para transportar pedidos de cualquiera de nuestros productos a toda la República Mexicana.</p>
      </div>
      <div class="col-md-3 col-xs-12" align="center">
        <br>
        <img src="img/iconos/atencion.png" class="img-responsive">
        <p style="color:#000340D9; font-size:20px; padding-top:5px;" align="center"><b>Atención Personalizada</b></p>
        <p style="font-size:18px; padding-top:5px; text-align:justify;" align="left">Entendemos que cada cliente tiene necesidades diferentes, por ello brindamos asesoría para que conozcan nuestra variedad de productos y servicios, para que así obtengan el producto que más les conviene.</p>
      </div>
      <div class="col-md-3 col-xs-12" align="center">
        <br>
        <img src="img/iconos/bod.png" class="img-responsive">
        <p style="color:#000340D9; font-size:20px; padding-top:5px;" align="center"><b>Renta de Bodega</b></p>
        <p style="font-size:18px; padding-top:5px; text-align:justify;" align="left">Ofrecemos la rente de una bodega de 1,000 metros cuadrados y altura libre de 6 m. Para facilitar las maniobras de carga y descarga, la bodega cuenta con andenes para ferrocarril y camión.</p>
      </div>
    </span>
<!--Un cintillo tó' guapo-->
<div class="col-md-12 col-xs-12" style="background-color:#000340F2; padding-bottom:30px;">
          <div class="col-md-10 col-xs-12">
          <p style="padding-top:35px; text-align:center; font-size:25px; color:white" align="center"><b>Contamos con materia prima para productores industriales</b></p>
          <p style="padding-top:5px; text-align:center; font-size:15px; color:white" align="center">Nuestra especialidad es el carbón mineral, pero contamos con diversos productos como el grafito y las arenas sílicas.</p>
        </div>
        <br>
        <br>
        <div class="col-md-2 col-xs-12">
          <br>
          <p align="center"><a href="Productos.php"><button type="btn" class="btn" style="background-color:#FFFFFFB3; color:black; font-size:20px; size:20px;"><b>Más Información</b></button></a></p>
        </div>
      </div>
<!--Acaba el cintillo-->
  </div>
    <!--FIn de toda la parafernalia-->
  </div>
  </div>
</div>
<br>
<br>
        <!--Fin de Contenido-->
  <!--Fondo del mar-->
  <div class="container-fluid">
        <div class="row">
        <div class="col-md-12 col-xs-12" style="background-color:#000340F2; padding-bottom:13px;">
          <div class="col-md-4 col-xs-4">
          <p style="padding-top:35px; text-align:left; font-size:2.5vw; color:white"><b>NUESTRA POLÍTICA</b></p>
          <h1 class="bottomm"><b>Brindarles siempre el mejor servicio.</b></h1>
        </div>
        <div class="col-md-6 col-xs-4">
          <p style="padding-top:35px; text-align:center; font-size:2.5vw; color:white"><b>HORARIO OFICINA</b></p>
          <h1 class="bottomm" style="text-align:center;"><b>Lunes - Viernes: 08:00 a 13:00 // 14:00 a 17:00</b></h1>
        </div>
        <div class="col-md-2 col-xs-4">
          <br>
          <img Src="img/CokesL1.png" class="img-responsive" align="right" width="125" height="125">
        </div>
      </div>
    </div>
  </div>
      <!--Fin del fondo marino-->
    </div>
    </div>
  </body>
</html>