<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" href="img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poor+Story&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Neonderthaw&display=swap" rel="stylesheet">
<?php include "variables.php"; ?>

<title>Marcelo IPP</title>
</head>
<body>


    <header>
      <script src="js/script.js"></script>
      
        <div >
            <div>
              <!--Aquí va la barra de navegacion, se utiliza el ms-auto para mover el menú a la derecha-->

                <nav class="navbar navbar-expand-lg bg-warning" >
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">La web de Marcelosky</a>
                      <a class="navbar-brand" href="cuentos.php">Cuentos</a>
                      <a class="navbar-brand" href="fibo.php">Fibonacci</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNavDropdown" >
                        <ul class="navbar-nav ms-auto">
                          
                          <!--EN ESTE SECTOR SE HACE REFERENCIA A LOS SECTORES DE LA MISMA PAGINA COMN HREF=#-->

                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Menú
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#sbe">Samsara Blues Experiment</a></li>
                              <li><a class="dropdown-item" href="#atw">All Them Witches</a></li>
                              <li><a class="dropdown-item" href="#hn">Hielo Negro</a></li>
                              <li><a class="dropdown-item" href="#dmnt">Demonauta</a></li>
                              <li><a class="dropdown-item" href="#tg">the gathering</a></li>
                            </ul>

                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" id="casa" class="d-flex align-items-end" >Casa</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>


                  <!--AQUI HE INSERTADO UN MENU FIJO QUE BAJA CON LA PAGINA TAMBIEN HACIENDO REFERENCIA A LOS SECTORES DE LA PAGINA, BOTON DROPDOWN TOTALMENTE FUNCIONAL -->
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Menú de artistas
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#casa">casa</a></li>
                      <li><a class="dropdown-item" href="#sbe">Samsara Blues Experiment</a></li>
                      <li><a class="dropdown-item" href="#atw">All Them Witches</a></li>
                      <li><a class="dropdown-item" href="#hn">Hielo Negro</a></li>
                      <li><a class="dropdown-item" href="#dmnt">Demonauta</a></li>
                      <li><a class="dropdown-item" href="#tg">the gathering</a></li>
                      
                    </ul>
                  </div>
            </div>
           
            
<!---SECTOR DONDE SE INCLUYE EL CARRUSEL AJUSTADO EN EL CENTRO -->
<div >
    <p class="container" class="titulo" >La web de Marcelosky</p>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/demonauta.jpg" class="d-block w-20 h-100" alt="demonauta" >
          <a class="dropdown-item" href="#dmnt">Demonauta</a>
        </div>
        <div class="carousel-item">
          <img src="img/hielo.jpg" class="d-block w-20 h-100" alt="Hielo Negro">
          <a class="dropdown-item" href="#hn">Hielo Negro</a>
        </div>
        <div class="carousel-item">
          <img src="img/samsara.jpg" class="d-block w-20 h-100" alt="Samsara Blues Experiment">
          <a class="dropdown-item" href="#sbe">Samsara Blues Experiment</a>
        </div>
        <div class="carousel-item">
          <img src="img/atw.jpg" class="d-block w-20 h-100" alt="All them witches">
          <a class="dropdown-item" href="#atw">All Them Witches</a>
        </div>
        <div class="carousel-item">
          <img src="img/thegathering.jpg" class="d-block w-20 h-100" alt="the gathering">
          <a class="dropdown-item" href="#tg">the gathering</a>
        </div>
      </div>
    </div>


    <!--DESDE ESTE SECTOR COMIENZA EL RELLENO DE LA PAGINA CON LAS FOTOS Y PARRAFOS SOLICITADOS-->


    <p class="parrafo">
        <p class="intro"> Mis intereses Musicales</p>
    </p>
    <p class="parrafo" id="sbe">
        <h4>Samsara Blues Experiment</h4> 
        <p class="disco1"><?= $img1;?></p>    <br>
        <h5><p class="parrafo1"> <?php echo $parrafo1 ?>
        <iframe width="450" height="315" src="https://www.youtube.com/embed/nxQ6NqYJ2do" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
        </p> </h5>


    </p>
</div>
<div >
  <p class="parrafo" id="atw">
      <h4>All Them Witches</h4> 
          <br>
          <p class="disco2"><?= $img2;?></p>
     <h5><p class="parrafo2"> <?php echo $parrafo2 ?>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/VteuWD_dIdk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
      </p> 
    </h5>

  </p>
</div>
<div >
  <p class="parrafo" id="hn">
      <h4>Hielo Negro</h4>   
      <p class="disco3"><?= $img3;?></p>    
     <h5><p class="parrafo3"><?php echo $parrafo3 ?> <br>
      <iframe width="450" height="315" src="https://www.youtube.com/embed/qahXcLaZc0A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </p> 
    </h5>

  </p>
</div>
<div >
  <p class="parrafo" id="dmnt">
      <h4>Demonauta</h4>   
      <p class="disco4"><?= $img4;?></p>    <br>
     <h5><p class="parrafo4">  <?php echo $parrafo4 ?><br>
       <iframe width="480" height="315" src="https://www.youtube.com/embed/ewLKpFOYur8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       
      </p> 
    </h5>

  </p>
</div>
<div >
  <p class="parrafo" id="tg">
      <h4>The Gathering</h4>   
      <p class="disco5"><?= $img5;?></p>    <br>
     <h5><p class="parrafo5"> <?php echo $parrafo5 ?> <br>
     <iframe width="560" height="315" src="https://www.youtube.com/embed/Y46Lft_BZxo?si=a08rXPVXLKlkriwG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
         </p> 
    </h5>

  </p>
</div>


<?php   
$check="";
if($check == True) {?>
  
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img2/mw2.jpg" class="d-block w-20 h-100" alt="demonauta" >
        <a class="dropdown-item" href="#dmnt">Call of duty </a>
      </div>
      <div class="carousel-item">
        <img src="img2/l2.jpg" class="d-block w-20 h-100" alt="Hielo Negro">
        <a class="dropdown-item" href="#hn">Lineage 2</a>
      </div>
      <div class="carousel-item">
        <img src="img2/tow2.jpeg" class="d-block w-20 h-100" alt="Samsara Blues Experiment">
        <a class="dropdown-item" href="#sbe">The outer worlds</a>
      </div>
  </div>
</div>
 <?php } ?>
       
      
     



<!--FINALMENTE EL FOOTER DEL MISMO COLOR QUE LA NAVBAR ADEMAS DE ESTAR CENTRADO-->
    </header>
    <footer class = "text-center">
        <p class="pie bg-warning">
           Marcelo web-site
        </p>
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

   
  </body>
</html>

