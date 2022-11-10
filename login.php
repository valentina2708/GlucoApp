<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/ac8bce39a1.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/styles.css" />
  <title>Iniciar sesión</title>
</head>

<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        
      <div class="nav justify-content-center" id="navbarNav">
      <a class="navbar-brand" href="index.php">
      <img src="media/logo.svg" alt="GlucoApp" width="60" height="40">
      GlucoApp
    </a>
      </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

  
     <div >
        <a href="registro_usuario.php"   role="submit" class="btn btn-outline-secondary btn-sm" class="nav justify-end">
        <i class="bi bi-person-plus-fill"></i> Registrarse
        </a> 
     
        <a href="login.php" tabindex="-1" role="submit"class="btn btn-outline-secondary btn-sm" class="nav justify-end">
          <i class="bi bi-person-fill"></i> Iniciar sesión
       </a> 
    </div>

  </div>
</nav>

  <div class="contenedor_login">
    <form class="formulario-registro-usuario">

      <h2>Inicio de Sesión</h2>

      <div class="contenedor">

        <div class="input-contenedor">
          <i class="fa-solid fa-envelope"></i>
          <input type="text" placeholder="Correo electrónico">
        </div>
        <div class="input-contenedor">
          <i class="fa-solid fa-key"></i>
          <input type="password" placeholder="Contraseña">
        </div>

        <input type="submit" value="Iniciar Sesión" class="button">
        <p></p>
        <p class="p-registro-usuario">¿No tienes una cuenta? <a class="link" href="registro_usuario.php">Regístrate</a></p>

      </div>
    </form>
  </div>
  <footer class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <p>&copy; GlucoApp 2022</p>
        </div>
    </footer>

</body>

</html>