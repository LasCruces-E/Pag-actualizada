<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Orden</title>
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

    <section class="mb-3">
        <div class="avisos w-100">
            <div class="row h-100">
                <div class="col-sm-4 bg-cdark d-flex justify-content-center align-items-center">
                    <p class="ms-3 mt-3">Servicio previa reservación</p>
                </div>
                <div class="col-sm-8 bg-beige d-flex justify-content-center align-items-center">
                    <p class="mt-3">No se permite la entrada con alimentos o bebidas</p>
                </div>
              </div>
        </div>
    </section>

    <section class="pt-3">
        <div class="container">
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 66%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100">66%</div>
            </div>
            <div class="paso mt-4 w-100 d-flex flex-row justify-content-start">
                <span class="badge rounded-pill bg-brown">2</span>
                <p class="ms-2"><b>Selección de servicios y comida</b></p>
            </div>
            <p class="mt-3">Seleccione la comida o servicio que desea reservar</p>
        </div>
    </section>

    <section id="s-servicios">
      <div class="container">
          <div class="card bg-brown">
            <h4 class="mb-2">Servicios</h4>
          </div>
          <h5>Da clic a la imagen del servicio que deseas seleccionar</h5>
          <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card bg-dark text-white w-100 h-100">
                <img src="img/mesas.jpg" class="card-img" alt="...">
                <div class="card-img-overlay d-flex flex-column justify-content-center">
                  <div class="producto flex-grow-1 d-flex align-items-center justify-content-center">
                    <h1 class="card-title fw-bolder">Renta de espacio</h1>
                  </div>  
                  

                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Agregar
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content text-dark">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col">
              <div class="card bg-dark text-white w-100 h-100">
                <img src="img/mesas.jpg" class="card-img" alt="...">
                <div class="card-img-overlay text-center">
                  <h5 class="card-title fw-bolder">Paseo a caballo</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card bg-dark text-white w-100 h-100">
                <img src="img/mesas.jpg" class="card-img" alt="...">
                <div class="card-img-overlay text-center">
                  <h5 class="card-title fw-bolder">Paseo a caballo</h5>
                </div>
              </div>
            </div>
            
          </div> 
      </div>
    </section>

    <section id="s-comida" class="mt-4">
        <div class="container">
            <h4 class="mb-2">Comida</h4>
            <div class="card">
                <div class="card-body d-flex flex-row align-items-center justify-content-between bg-brown rounded">
                    Orden de barbacoa de borrego
                    <div class="mod text-dark">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalBorrego">
                            Anadir
                        </button>

                        <div class="modal fade" id="exampleModalBorrego" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Orden de barbacoa de borrego</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Descripcion</h4>
                                            <p> Al horno de tierra </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Precio</h4>
                                            <p>$150.00</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cantidad</h4>
                                            <input type="number" id="tentacles" name="tentacles"
                                            min="1" max="20">
                                        </div>
                                      </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-body d-flex flex-row align-items-center justify-content-between bg-brown rounded">
                    Orden de barbacoa de res
                    <div class="mod text-dark">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalBorrego">
                            Anadir
                        </button>

                        <div class="modal fade" id="exampleModalBorrego" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Orden de barbacoa de borrego</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Descripcion</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui aspernatur consequatur facere reiciendis? Dolor repellat quam dolore assumenda recusandae cumque, autem neque quas sit, pariatur accusantium tempora molestias perspiciatis delectus.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Precio</h4>
                                            <p>$10.00</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cantidad</h4>
                                            <input type="number" id="tentacles" name="tentacles"
                                            min="1" max="20">
                                        </div>
                                      </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section id="pedido" class="mt-5">
        <div class="container">
            <h4>Pedido</h4>
            <div class="card">
                <div class="card-header bg-dark text-light">
                  Servicios seleccionados
                </div>
                <div class="card-body m-0 p-0">
                    <div class="card border-0">
                        <div class="card-body">
                           <div class="row">
                               <div class="col-5">Paseo a caballo</div>
                               <div class="col-3">$10.00</div>
                               <div class="col-1">4</div>
                               <div class="col-3">$40.00</div>
                           </div>
                        </div>
                      </div>
                </div>
                <div class="card-body m-0 p-0">
                    <div class="card border-0">
                        <div class="card-body">
                           <div class="row">
                               <div class="col-5">Paseo a caballo</div>
                               <div class="col-3">$10.00</div>
                               <div class="col-1">4</div>
                               <div class="col-3">$40.00</div>
                           </div>
                        </div>
                      </div>
                </div>
                <div class="card-body m-0 p-0">
                    <div class="card border-0">
                        <div class="card-body">
                           <div class="row">
                               <div class="col-5">Paseo a caballo</div>
                               <div class="col-3">$10.00</div>
                               <div class="col-1">4</div>
                               <div class="col-3">$40.00</div>
                           </div>
                        </div>
                      </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header bg-dark text-light">
                  Comida seleccionada
                </div>
                <div class="card-body m-0 p-0">
                    <div class="card border-0">
                        <div class="card-body">
                           <div class="row">
                               <div class="col-5">Pizza</div>
                               <div class="col-3">$240.00</div>
                               <div class="col-1">2</div>
                               <div class="col-3">$480.00</div>
                           </div>
                        </div>
                      </div>
                </div>
                <div class="card-body m-0 p-0">
                    <div class="card border-0">
                        <div class="card-body">
                           <div class="row">
                               <div class="col-5">Paseo a caballo</div>
                               <div class="col-3">$10.00</div>
                               <div class="col-1">4</div>
                               <div class="col-3">$40.00</div>
                           </div>
                        </div>
                      </div>
                </div>
                <div class="card-body m-0 p-0">
                    <div class="card border-0">
                        <div class="card-body">
                           <div class="row">
                               <div class="col-5">Paseo a caballo</div>
                               <div class="col-3">$10.00</div>
                               <div class="col-1">4</div>
                               <div class="col-3">$40.00</div>
                           </div>
                        </div>
                      </div>
                </div>
            </div>

            <div class="total d-flex flex-row mt-3 mb-5 w-100 justify-content-end">
                <h4>Total : </h4>
                <h3> $680.00</h3>
            </div>

            <div class="enviar w-100 mb-5 d-flex justify-content-center">
                <button type="button" class="btn boton bg-brown">CONTINUAR</button>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>