<?php session_start()

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Iniciar Sesion</title>
</head>
<style>
    
</style>
<body>
<main class="form-signin w-50 m-auto">
  <form  action="process/login.php" method="POST">
    <img class="mb-4" src="img/JA dev-logos_transparent.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Iniciar sesion</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="correo@email.com">
      <label for="floatingInput">Correo electronico</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="********">
      <label for="floatingPassword">Contraseña</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Recordarme
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Iniciar sesion</button>
    <p class="mt-5 mb-3 text-body-secondary">Arthecnology &copy; 2024–2030</p>
  </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>