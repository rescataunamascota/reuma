<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Rescata una Mascota</title>
  <!--------------LINKS A RECURSOS---------------------->
  <!-- LINKS A BOOTSTRAP CORE CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- LINKS A HOJA DE ESTILOS -->
  <link href="css/reuma.css" rel="stylesheet">
  <!-- LINK DE ESTILO DE LA LETRA : Se decidió usar el tipo de letra Roboto de Google Font -->
  <!-- LINKS A JAVASCRIPT REMOTO PARA LOS GRAFICOS DE INFORMACION -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
</head>

<body class="color-fondo">
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top color-poli">
    <!-- INICIO MENU DE NAVEGACION -->
    <div class="container">
      <a class="navbar-brand" href="index.html"><img src="images/logo-horizontal-white.png" width="107" height="35"
          alt="Rescata una mascota" /></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="adopta.html">Adopta</a>
            <!-- LINK ADOPTA : Pagina en que las personas pueden ver las mascotas disponibles para adopcion-->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ayuda.html">Ayuda</a>
            <!-- LINK AYUDA : Pagina en que las personas pueden ver la ampliacions de las formas de ayudar-->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fundaciones.html">Fundaciones</a>
            <!-- LINK FUNDACIONES : Pagina en que las personas pueden ver las diferentes instituciones a las cuales pueden ayudar-->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registro.html">Registro</a>
            <!-- LINK REGISTRO : Pagina en que las personas pueden registrarse como fundacion o voluntario etc-->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reuma.html">Quienes Somos?</a>
            <!-- LINK QUIENES SOMOS : Pagina que describe el problema y porque decidimos hacer el proyecto-->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.html">Contacto</a>
            <!-- LINK CONTACTO : Pagina en que las personas pueden llenar un formulario para consultas generales-->
          </li>
          <li class="nav-item">
            <!-- BUSQUEDA -->
            <form action="resultados_busqueda.html" class="form-inline">
              <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Buscar"
                aria-label="Buscar">
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav><!-- FIN MENU DE NAVEGACION -->
  <header>
    <!-- INICIO HEADER-->
  </header><!-- FIN HEADER-->
  <!-- CONTENIDO PRINCIPAL -->
  <div class="container">
    <h1 class="my-4 text-poli">Carrito de Compras</h1>
    <!-- TITULO DE LA PAGINA : se creo un H1 y una clase para el titulo de cada pagina-->
    <hr>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Adopta</li>
    </ol>
    <img class="img-fluid rounded mb-4" src="http://placekitten.com/g/1200/300" alt="">
    <!-- IMAGEN DESCRIPTIVA DE SECCION : imagen aleatoria de una servicio de internet temporal hasta elegir la imagen final-->
    <p style="display: block; padding: 50px 0px 80px 0px;">Compra Exitosa!</p>
    <br>
    <br>
    <hr>
    <div class="row">
      <!-- INICIO SECCION MAS INFORMACION  : seccion para agregar informacion general para complementar el contenido principal de la pagina en la que se encuentra, se hizo para texto e imagenes o graficas en una proporcion 70/30-->
      <div class="col-lg-8 text-poli">
        <!-- TEXTO DUMMY : se creo una lista, un h2 y se inserto una imagen aleatoria de un servicio en linea-->
        <h2>Que es rescata una mascota ?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id
          reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt.</p>
        <ul>
          <li>Item de lista</li>
          <li>Item de lista</li>
          <li>Item de lista</li>
          <li>Item de lista</li>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id
          reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum
          ducimus unde.</p>
      </div>
      <div class="col-lg-4">
        <img src="http://placekitten.com/g/350/280" /><!-- IMAGEN ALEATORIA COMO PLACEHOLDER  -->
      </div>
    </div>
    <!-- FIN SECCION MAS INFORMACION  : seccion para agregar informacion general para complementar el contenido principal de la pagina en la que se encuentra, se hizo para texto e imagenes o graficas en una proporcion 70/30-->
    <hr>
    <!-- INICIO LLAMADO A LA ACCION CTA : Se creó un link a la sección de contáctenos y se agregó un tag "p" para que la persona quiera preguntar mas cosas-->
    <div class="row mb-4">
      <div class="col-md-8 text-poli">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti
          beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block color-poli-secundario" href="contacto.html">Contáctanos</a>
      </div>
    </div>
    <!-- FIN LLAMADO A LA ACCION CTA : Usado para motivar a las personas a realizar una accion importante, en este caso Adoptar-->
  </div>
  <!-- INICIO FOOTER : Utilizado para incluir links de navegación, enlaces de interés, copyright o botones a las redes sociales del sitio.-->
  <footer class="py-5 bg-dark color-poli">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Rescata una Mascota</p>
    </div>
  </footer>
  <!-- FIN FOOTER : Utilizado para incluir links de navegación, enlaces de interés, copyright o botones a las redes sociales del sitio.-->
  <!-- LINKS RECURSOS DE JAVASCRIPT DE BOOTSTRAP -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>new Chart(document.getElementById("chartjs-4"), { "type": "doughnut", "data": { "labels": ["Perros", "Otros", "Gatos"], "datasets": [{ "label": "My First Dataset", "data": [300, 50, 100], "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"] }] } });</script>
</body>

</html>