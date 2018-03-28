<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Estilos/css/bootstrap.min.css" >
    <!--Estilos personalizados -->
    <link rel="stylesheet" href="Estilos/css/estilos.min.css" >

    <link rel="stylesheet" type="Estilos/text/css" href="css/bootstrap.css">


    <title>SIROPA</title>

    

   

    {!!Html::style('Estilos/css/bootstrap.min.css')!!}

    <!-- MetisMenu CSS -->
    <!--<link href="metisMenu/metisMenu.min.css" rel="stylesheet">-->
    {!!Html::style('Estilos/css/estilos.min.css')!!}

    <!-- Custom CSS -->
    <!--<link href="dist/css/sb-admin-2.css" rel="stylesheet">-->
    {!!Html::style('Estilos/css/bootstrap.css')!!}

</head>

<body>

    <section id="cover bg-dark">
        <div id="cover-texto bg-dark">
          <!--div class="container bg-dark"-->
            <div class="bg-dark">
            <div class="row bg-dark"> 
              <div class="col-sm-15 bg-dark">
                <img class="d-block bg-dark" src="Estilos/img/13.png">
                <!--h1 class="display-3">SIROPA</h1>
                <p>Sistema De Investigacion De Obras Públicas y Adquisiciones</p-->
              </div>
            </div>
          </div>
        </div>

      </section>
     
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Menu</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?">Administrador</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Contactos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('/atolinga') }} ">Atolinga</a>
              <a class="dropdown-item" href="{{ url('/momax') }}">Momax</a>
              <a class="dropdown-item" href="{{ url('/santa_maria') }}">Santa María</a>
              <a class="dropdown-item" href="{{ url('/teul') }}">Teúl de González Ortega</a>
              <a class="dropdown-item" href="{{ url('tlaltenango') }}">Tlaltenango de Sánchez Román</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('/funcion_publica') }}">Función Pública</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acerca de</a>
          </li>

          
        </ul>
        <FORM class="form-inline my-2 my-lg-0" method=GET action="http://www.google.es/search"> 
          
          <INPUT TYPE=text id="s" name="q"  value="" class="form-control mr-sm-2" placeholder="Buscar" aria-label="Buscar" />

          <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
      </div>
    </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>
        <!-- /#page-wrapper  hasta aqui puto-->

    </div>
    <!-- /#wrapper -->

    
  {!! Html::script("Estilos/js/bootstrap.js") !!}



    <!-- Bootstrap Core JavaScript -->
    <!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
    {!!Html::script('Estilos/js/bootstrap.min.js')!!}

    <!-- Metis Menu Plugin JavaScript -->
    <!--<script src="metisMenu/metisMenu.min.js"></script>-->
    {!!Html::script('Estilos/metisMenu/metisMenu.min.js')!!}

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js" ></script>
    <script src="Estilos/js/bootstrap.js" ></script>
</body>

</html>