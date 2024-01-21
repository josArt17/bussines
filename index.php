<?php session_start();

date_default_timezone_set('America/Mexico_City');

include 'process/session.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Inicio</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Roboto:wght@400;500;700&display=swap');

    #date-and-time{
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
    }

    .cont-chart {
        width: 400px;
    }

    .sec-metas {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .sec-metas div h2 {
      text-align: center;
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
    }

    #meta-registrada {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .meta-data {
      text-align: center;
      display: flex;
      justify-content: space-around;
      align-items: center;
      flex-wrap: wrap;
      width: 250px;
      font-family: 'Roboto', sans-serif;
      font-weight: 400;
      box-shadow: -6px 14px 4px 1px rgba(0, 0, 0, 0.1);
      margin-bottom: 2rem;
    }
</style>
<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Panel de control</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Inicio</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Pedidos</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Contactos</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Historico</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Control financiero</a></li>
      </ul>
    </header>
</div>
<section class="d-flex flex-wrap justify-content-center py-3 mb-4">
    <div>
        <p id="date-and-time"></p>
    </div>
</section>
<section class="sec-metas">
    <div>
        <h2>Metas en progreso</h2>
        <div class="cont-meta">
            <div class="placeholder-glow" id="placeholder-meta">
                <span class="placeholder col-12"></span>
                <span class="placeholder col-12"></span>
                <span class="placeholder col-12"></span>
                <span class="placeholder col-12"></span>
            </div>
            <div id="meta-registrada">

            </div>
            <div>
                <button type="button" class="btn btn-primary" id="btn-registrar" data-bs-toggle="modal" data-bs-target="#exampleModal">Registrar meta</button>
                <button type="button" class="btn btn-danger" id="btn-eliminar" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar meta</button>
                <button type="button" class="btn btn-warning" id="btn-editar" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar meta</button>
            </div>
        </div>
    </div>
    <div class="cont-chart">
        <canvas id="myChart"></canvas>
    </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" id="form-meta">
        <div class="modal-body">

          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="Mi meta" name="nombre-meta">
            <label for="floatingInput">Nombre de la meta</label>
          </div>

          <div class="form-floating">
            <input type="date" class="form-control" id="floatingInput" placeholder="Mi meta" name="inicio-meta">
            <label for="floatingInput">Inicio de la meta</label>
          </div>

          <div class="form-floating">
            <input type="date" class="form-control" id="floatingInput" placeholder="Mi meta" name="fin-meta">
            <label for="floatingInput">Fin de la meta</label>
          </div>

          <div class="form-floating">
            <input type="number" class="form-control" id="floatingInput" placeholder="Mi meta" name="monto-meta">
            <label for="floatingInput">Monto de mi meta</label>
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Guardar">
        </div>
      </form>
    </div>
  </div>
</div>



<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      </a>
      <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2023 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-twitter-x"></i></a></li>
      <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-instagram"></i></a></li>
      <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-facebook"></i></a></li>
    </ul>
  </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="scripts/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>