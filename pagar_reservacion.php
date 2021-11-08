<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Paso 3: Recibo de Pago</title>
        <?php require_once('menu.php');?>
</head>
<body>
    <!--Container for information at the top-->
    <div class="container mb-5 mt-5">
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 99%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">99%</div>
        </div>
        <div class="paso mt-5">
            <span class="badge rounded-pill bg-brown">3</span>
            <p><b>Pago</b></p>
        </div>
    </div>
    <!--Container with information of payment-->
    <div class="container mb-5 mt-5 shadow">
        <div class="container">
            <h2>Datos de Reservación</h2>
            <table class="table table-borderless">
                <tbody>
                  <tr>
                    <td>
                      <p id="nombre">Sonni Augusto Gómez Arreguín</p>
                      <p id="telefono">8-12-13-1467</p>
                      <p id="cant-personas">Núm. personas: 3</p>
                      <p id="dia">Día: 29-09-2021</p>
                      <p id="hora">Hora de llegada: 10:00 AM</p>
                  </td>
                </tbody>
              </table>
        </div>
        <hr class="my-4">
        <div class="container">
            <h2>Productos</h2>
            <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td id="producto">N/A</td>
                    <td id="cantidad">N/A</td>
                    <td id="precio">$0.00</td>
                  </tr>
                  <tr>
                    <td id="producto">N/A</td>
                    <td id="cantidad">N/A</td>
                    <td id="precio">$0.00</td>
                  </tr>
                  <tr>
                    <td id="producto">N/A</td>
                    <td id="cantidad">N/A</td>
                    <td id="precio">$0.00</td>
                  </tr>
                </tbody>
              </table>
        </div>
        <hr class="my-4">
        <div class="container">
            <div class="row">
                <div class="col text-end">
                  Subtotal:
                </div>
                <div class="col text-start">
                 <p id="subtotal">$0.00</p>
                </div>
            </div>
            <div class="row">
                <div class="col text-end">
                  <h5>Total a pagar:<h5>
                </div>
                <div class="col text-start">
                 <p id="total">$0.00</p>
                </div>
            </div>
        </div>
    </div>
    <div class="d-grid col-7 mx-auto">
        <button class="btn btn-primary mb-1 bg-brown" type="button">Proceder a pagar</button>
        <button class="btn btn-primary mb-1 bg-brown" type="button">Proceder a pagar</button>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>