<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Las Cruces</title>
    <link rel="shortcut icon" href="img/iconSierra.png">

    <?php
      require_once('menu.php');
    ?>
</head>
<body>

    <section id="index">
        <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center">
            <h1 class="inicio fw-bolder">LAS CRUCES</h1>
            <p class="p-inicio fw-normal">Ecoturismo de naturaleza</p>
            <a class="btn boton bg-brown" href="formulario.php" role="button"><p>RESERVAR</p></a>
        </div>
    </section>
    <section id="intro">
        <div class="container pt-5 d-flex flex-column align-items-center">
            <h1 class="mb-3">¡Una experiencia diferente!</h1>
            <p class="mb-5">Aventura, Recreación, Gastronomía, Descanso y Entretenimiento Sustentable</p>
            <video class="w-100 h-100 pb-5" controls>
                <source src="Clase.mp4" type="video/mp4">
            </video>
        </div>
    </section>
    <section id="mini-banner">
        <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center">
            <h1>¿Quiénes somos?</h1>
            <p>Del huerto y la granja a tu mesa</p>
            <a class="btn boton bg-brown" href="servicios.php" role="button"><p>VER MÁS</p></a>
        </div>
    </section>
    <section>
        <div class="container pt-5 d-flex flex-column align-items-center pb-5">
            <h1 class="mb-3">¡Conoce nuestros servicios!</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
                <div class="col">
                    <div class="card h-100">
                      <img src="img/atoleArroz.jpg" class="card-img-top" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Menú</h5>
                        <p class="card-text">Variedad de platillos artesanales</p>
                        <a class="btn btn-primary bg-brown" href="comida.php" role="button">MAS INFORMACIÓN</a>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100">
                      <img src="img/zona_acampar.jpeg" class="card-img-top" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Servicios</h5>
                        <p class="card-text">Para que disfrute su estancia</p>
                        <a class="btn btn-primary bg-brown" href="servicios.php" role="button">MAS INFORMACIÓN</a>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100">
                      <img src="img/vista.jpeg" class="card-img-top" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Recomendaciones y compromisos</h5>
                        <p class="card-text">El cuidado de este paraíso natural es una prioridad</p>
                        <a class="btn btn-primary bg-brown" href="recomendaciones_y_compromisos.php" role="button">MAS INFORMACIÓN</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>

    <section id="footer">
      <div class="w-100 bg-brown pt-5 pb-5">
        <div class="row row-cols-md-3 d-flex justify-content-center">
          <div class="col-sm-3 m-auto d-flex flex-column align-items-center">
            <img src="img/logo.png" alt="" class="w-25 h-50">
          </div>
          <div class="col-sm-3 d-flex flex-column align-items-center">
            <h3 class="mb-3">Contacto</h3>
            <ul class="list-group d-flex align-items-center">
              <li class="list-group mb-2">ecoturismodenaturaleza@gmail.com</li>
              <li class="list-group mb-2">4443196619</li>
              <li class="list-group mb-2"><a href="FAQ.php" class="text-white text-decoration-none">FAQ</a></li>
            </ul>
          </div>
          <div class="col-sm-3 d-flex flex-column align-items-center">
            <h3 class="mb-3">Redes sociales</h3>
            <ul class="list-group d-flex align-items-center">
              <li class="list-group mb-2"><a href="https://www.facebook.com/Ecoturismo-Las-Cruces-113553307075098/?modal=admin_todo_tour" class="text-white text-decoration-none"> <i class="fab fa-facebook-square"></i> Ecoturismo Las Cruces</a> </li>
              <li class="list-group mb-2"><a href="https://www.instagram.com/ecoturismolascruces/?hl=en" class="text-white text-decoration-none"> <i class="fab fa-instagram-square"></i> ecoturismolascruces</a></li>
              <li class="list-group mb-2"><a href="https://www.instagram.com/ecoturismolascruces/?hl=en" class="text-white text-decoration-none"> <i class="fab fa-twitter-square"></i> Las Cruces</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b6a0ace850.js"></script>
</body>
</html>