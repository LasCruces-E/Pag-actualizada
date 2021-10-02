<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Seleccion</title>
</head>
<body>

  <section>
    <nav class="navbar navbar-expand-lg navbar-light bg-brown">
        <div class="container-fluid">
            <a class="navbar-brand me-5 ms-sm-5" href="#">
                    <img src="img/logoHorizontalBlanco.png" alt="" width="240" height="60" class="d-inline-block align-text-top">
            </a>
          <button class="navbar-toggler border-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <p class="text-white">MENÚ</p>
          </button>
          <div class="collapse navbar-collapse ms-sm-5 text-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Galeria</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Servicios
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Menu</a></li>
                  <li><a class="dropdown-item" href="#">Servicios</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Politicas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Compromisos</a></li>
                  <li><a class="dropdown-item" href="#">Recomendaciones</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Acerca de</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</section>


    <div class="contenido">
        <div class="container">
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 66%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100">66%</div>
            </div>
            <div class="paso mt-5">
                <span class="badge rounded-pill bg-brown">2</span>
                <p><b>Seleccion de servicios y comida</b></p>
            </div>
            <p class="mt-3">Seleccione la comida o servicio que desea reservar</p>
            <h2 class="mb-5">Servicios</h2>
            
            <div class="servicios mt-5">
              <div class="card">
                <div class="card-body d-flex flex-row justify-content-between">
                  <h6>Paseo a caballo</h6>
                  <div class="mod text-dark">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Anadir
                    </button>
      
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><h3>Paseo a caballo</h3></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-md-12">
                                  <h4>Descripcion</h4>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui aspernatur consequatur facere reiciendis? Dolor repellat quam dolore assumenda recusandae cumque, autem neque quas sit, pariatur accusantium tempora molestias perspiciatis delectus.</p>
                              </div>
                              <div class="col-md-12">
                                  <h4>Precio</h4>
                                  <p>$10.00</p>
                              </div>
                            </div>
                            <div class="horario">
                              <h4>Horarios</h4> 
                              <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                  Caballo
                                  </a>
                              
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                  <li><a class="dropdown-item" href="#">Caballo 1</a></li>
                                  <li><a class="dropdown-item" href="#">Caballo 2</a></li>
                                  <li><a class="dropdown-item" href="#">Caballo 3</a></li>
                                  </ul>
                              </div>
                            </div>
                            <div class="horas mt-2">
                              <button type="button" class="btn btn-outline-secondary">10:00 - 11:00</button>
                              <button type="button" class="btn btn-outline-secondary">11:10 - 12:10</button>
                              <button type="button" class="btn btn-outline-secondary">12:20 - 1:20</button>
                              <button type="button" class="btn btn-outline-secondary">1:30 - 2:30</button>
                            </div>
                            <div class="horas mt-5">
                                <button type="button" class="btn btn-outline-secondary">10:00 - 11:00</button>
                                <button type="button" class="btn btn-outline-secondary">11:10 - 12:10</button>
                                <button type="button" class="btn btn-outline-secondary">12:20 - 1:20</button>
                                <button type="button" class="btn btn-outline-secondary">1:30 - 2:30</button>
                            </div>
                            <div class="seleccion mt-5">
                              <h4>Horas seleccionadas</h4>
                              <p>11:10 - 12:10</p>
                              <p>12:20 - 1:20</p>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Guardar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>

              </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>