<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Free download theme onepage, clean and modern responsive for all" />
  <meta name="keywords" content="responsive, html5, onepage, themes, template, clean layout, free web" />
  <meta name="author" content="Thomsoon.com" />
  <title>Cliente-Servidor</title>

  <link rel="shortcut icon" href="img/favicon.png">
  <link rel="stylesheet" type="text/css" href="css/reset.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/style-responsive.css" />

</head>

<body>

  <div class="container">

    <!--Inicio de la seccion de menu para moviles-->

    <section class="menu-media">
      <div class="menu-content">
        <div class="logo">Blogg MI</div>
        <div class="icon"><a href="#"><img src="img/icons/menu-media.png" /></a></div>
      </div>
    </section>

    <ul class="menu-click">
      <a href="{{Route('index')}}">
        <li href="{{Route('index')}}">Inicio</li>
      </a>
      <a href="{{Route('sobreN')}}">
        <li href="{{Route('sobreN')}}">Sobre Nosotros</li>
      </a>
      <a href="{{Route('posts')}}">
        <li href="{{Route('posts')}}">Posts</li>
      </a>
      <a href="{{Route('contacto')}}">
        <li href="{{Route('contacto')}}">Contactanos</li>
      </a>
    </ul>
    <!--Fin de la seccion de menu para moviles-->

    <!-- section menu para escritorio -->
    <section class="menu">

      <div class="menu-content">

        <div class="logo">Blogg Mi</div>

        <ul id="menu">
          <li><a href="{{Route('index')}}">Inicio</a></li>
          <li><a href="{{Route('sobreN')}}">Sobre nosotros</a></li>
          <li><a href="{{Route('posts')}}">Posts</a></li>
          <li><a href="{{Route('contacto')}}">Contacto</a></li>
        </ul>
      </div>
    </section>
    <!--Fin de la Seccion-->
   
    @yield('sobreN')
    

    <!-- Section de Posts -->
    @yield('Publicaciones')
    

    <!-- Fin de Section de Posts -->

    <div class="clear"></div>

    <!-- Seccion del Contacto-->
    @yield('Contacto')
    <!-- Fin de la Seccion -->

    <!--- Inicio del Footer -->
    <section class="footer">
      <div class="margin">
        <div class="menu-footer">
          <a href="{{Route('index')}}">Inicio</a>
          <a href="#">Politica de Privacidad</a>
          <a href="https://www.facebook.com/Alberto.Santos.Servidor.YAmigo/">Facebook</a>
        </div>
        
      </div>
    </section>
    <!--- Fin del Footer -->

  </div>

  <!-- Scripts -->

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> <!-- jQuery -->
  <script src="js/jquery.parallax.js"></script> <!-- jQuery Parallax -->
  <script src="js/jquery.nicescroll.js"></script> <!-- jQuery NiceScroll -->
  <script src="js/jquery.sticky.js"></script> <!-- jQuery Stick Menu -->
  <script src="js/script.js"></script> <!-- All script -->

</body>

</html>