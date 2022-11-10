<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlucoApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">
</head>



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
      <img src="media/logo.svg" alt="GlucoApp" width="60" height="40">
      GlucoApp
    </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

     <div class="nav justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php" >Niveles</a>
        </li>
 
      </ul>
    </div>

     <div >
        <a href="registro_usuario.php"  role="submit" class="btn btn-outline-secondary btn-sm" class="nav justify-end">
        <i class="bi bi-person-plus-fill"></i> Registrarse
        </a> 
     
        <a href="login.php" tabindex="-1" role="submit"class="btn btn-outline-secondary btn-sm" class="nav justify-end">
          <i class="bi bi-person-fill"></i> Iniciar sesión
       </a> 
    </div>

  </div>
</nav>
  
    <br>
    <br>

<body>
  
<div class="container">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
       <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
       <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
       <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="media/slider1.jpg" class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="media/slider2.jpg" class="d-block w-100" alt="..." />
       <div class="carousel-caption d-none d-md-block">
    </div>
    </div>
    <div class="carousel-item">
      <img src="media/slider3.jpg" class="d-block w-100" alt="..." />
     <div class="carousel-caption d-none d-md-block">
    </div>
     </div>
    </div>
       <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Anterior</span>
        </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
  </div>
    
    <br>

   
    <section id="gestion">
        <div class="container">
            <div class="img-container">
            <img src="media/gestion1.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="texto">
 
                <h2 style="color:#3284c7;">Gestiona tus Niveles de Azúcar</span></h2>
                <p>Glucoapp te permite registrar tus niveles de azúcar en la sangre 
                  facilitando medir el estado en que se encuentra tu glucosa 
                  y las ayudas necesarias para el autocuidado de la salud. </p>
            </div>
        </div>
    </section>  

    <div id="hero">
        <h1>Mejora tu Salud y tu Vida<br>con GlucoApp</h1>
        <a class="btn btn-primary" type="button" href="registro_usuario.php">INICIA TU PLAN DE SEGUIMIENTO</a>
    </div>


    <div id="nuestros-programas">
        <div class="container">
            <h2>Nuestros Servicios</h2>
            <div class="programas">
                <div class="carta">
                    <h3>Registro de Exámenes</h3>
                    <br>
                    <img src="media/registro.jpg" class="d-block " alt="..." />
                    <p>Registra los datos de los resultados de tus exámenes relacionados con los Niveles de azúcar en la Sangre y el Metabolismo.</p>
                    <a class="btn btn btn-lg" type="button" href="registro_usuario.php">Ir</a>
                </div>
                <div class="carta">
                    <h3>Consulta de Registros</h3>
                    <br>
                    <img src="media/consulta.jpg" class="d-block " alt="..." />
                    <p>Nuestra aplicación te permite consultar tus registros y llevar un seguimiento de ellos.</p>
                    <a class="btn btn btn-lg" type="button" href="registro_usuario.php">Ir</a>
                </div>
                <div class="carta">
                    <h3>Reportes Estadísticos</h3>
                    <br>
                    <img src="media/reportes.jpg" class="d-block " alt="..." />
                    <p>Genera Reportes estadísticos de tus resultados ingresados
                       según el tipo de examen y evalua el estado en que se encuentra tu salud.</p>
                       <a class="btn btn btn-lg" type="button" href="registro_usuario.php">Ir</a>
                </div>  
            </div>
        </div>
</div>



     <div id="caracteristicas">
        <div class="container">
        <img src="media/cuidados.jpg"  alt="..." />
            <ul>
                <li>✔️ 100% Gratuito</li>
                <li>✔️ Seguro y confiable</li>
                <li>✔️ Fácil de usar</li>
                <li>✔️ Comprometido con el bienestar</li>
            </ul>
        </div>
</div>




    <footer class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <p>&copy; GlucoApp 2022</p>
        </div>
    </footer>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>