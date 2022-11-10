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
  <title>Registrarse</title>
</head>

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
        <a href="login.php" tabindex="-1" role="submit"class="btn btn-outline-secondary btn-sm" class="nav justify-end">
          <i class="bi bi-person-fill"></i> Iniciar sesión
       </a> 
    </div>

  </div>
</nav>

<body>

  <div class="contenedor_login">
  <form class="formulario-registro-usuario">

    <h2>Registro</h2>

    <div class="contenedor">
      <div class="input-contenedor">
        <i class="fa-solid fa-user"></i>
        <input type="text" placeholder="Nombre">
      </div>
      <div class="input-contenedor">
        <i class="fa-solid fa-user"></i>
        <input type="text" placeholder="Apellido">
      </div>
      <div class="input-contenedor">
        <i class="fa-solid fa-calendar-days"></i>
        <input type="text" placeholder="Edad">
      </div>
      <div class="input-contenedor">
        <i class="fa-solid fa-droplet"></i>
        <select name="rh" id="rh">
          <option value="A+">A+</option>
          <option value="O+">O+</option>
          <option value="B+">B+</option>
          <option value="AB+">AB+</option>
          <option value="A-">A-</option>
          <option value="O-">O-</option>
          <option value="B-">B-</option>
          <option value="AB-">AB-</option>
        </select>
      </div>
      <div class="input-contenedor">
        <i class="fa-solid fa-venus-mars"></i>
        <select name="genero" id="genero">
          <option value="masculino">Masculino</option>
          <option value="femenino">Femenino</option>
        </select>
      </div>
      <div class="input-contenedor">
        <i class="fa-solid fa-envelope"></i>
        <input type="text" placeholder="Correo electrónico">
      </div>
      <div class="input-contenedor">
        <i class="fa-solid fa-key"></i>
        <input type="password" placeholder="Contraseña">
      </div>

      <input type="submit" value="Registrarse" class="button">

      <p></p>
      <p class="p-registro-usuario">Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad</p>
      <p></p>
      <p class="p-registro-usuario">¿Ya tienes una cuenta? <a class="link" href="login.php">Inicia Sesión</a></p>

    </div>
  </form>
  </div>
  <br>
  <br>

  <footer class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <p>&copy; GlucoApp 2022</p>
        </div>
    </footer>

</body>

</html>