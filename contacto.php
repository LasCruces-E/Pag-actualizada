<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Contacto</title>
    <link rel="shortcut icon" href="img/iconSierra.png">

    <?php
      require_once('menu.php');
    ?>
</head>
<body>
    
    <section id="hero">
        <div class="banner">
            <h1 class="titulo_banner fw-bolder">CONTACTO</h1>
        </div>
    </section>
    <section id="formulario" class="w-100 vh-100">
        <div class="textos w-75 m-auto pt-5 text-center mb-5">
            <h2 class="mb-5 text-orange fw-bold">¡CONTÁCTANOS!</h2>
            <p>Para una mejor atención ponte en contacto con nosotros a través de nuestras diferentes redes sociales</p>
        </div>
        <div class="contact mw-100 min-h-100 bg-light">
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center pb-5">
                    <iframe class="px-4 pt-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7391.199133271874!2d-100.65720363026963!3d22.141238223321153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842aad5577d20d15%3A0x743be76d83a67d75!2sLas%20Cruces!5e0!3m2!1ses-419!2smx!4v1629763251036!5m2!1ses-419!2smx" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col d-flex justify-content-center align-items-center border-start pb-5">
                    <form action="" class="w-75 d-flex flex-column pt-5" method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre" placeholder="Juan Perez">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="correo" placeholder="ejemplo@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tel</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="telefono" placeholder="4441112233">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Mensaje</label> 
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mensaje"></textarea>
                        </div>
                        <!--<button type="button" class="btn boton bg-brown m-auto mt-3" value="Send" name="send">ENVIAR</button>-->
                        <input type="submit" name="send" class="btn-submit" value="Send" />
                    </form>
                </div>
            </div>
        </div>
        <div class="social w-75 m-auto min-h-25 d-flex flex-lg-row justify-content-around pt-3 mt-5 mb-5">
            <div class="red d-flex flex-row mb-2">
                <div class="icon bg-brown rounded-circle d-flex justify-content-center">
                    <i class="fab fa-whatsapp m-auto"></i>
                </div>
                <p class="ms-2">4443196619</p>
            </div>
            <div class="red d-flex align-items-baseline">
                <div class="icon bg-brown rounded-circle d-flex justify-content-center">
                    <i class="far fa-envelope m-auto"></i>
                </div>
                <p class="ms-2">ecoturismodenaturaleza@gmail.com</p>
            </div>
            <div class="red d-flex align-items-baseline">
                <div class="icon bg-brown rounded-circle d-flex justify-content-center">
                    <i class="fab fa-facebook-f m-auto"></i>
                </div>
                <p class="ms-2">Ecoturismo Las Cruces</p>
            </div>
            <div class="red d-flex align-items-baseline">
                <div class="icon bg-brown rounded-circle d-flex justify-content-center">
                    <i class="fab fa-twitter m-auto"></i>
                </div>
                <p class="ms-2">Ecoturismo Las Cruces</p>
            </div>
            <div class="red d-flex align-items-baseline">
                <div class="icon bg-brown rounded-circle d-flex justify-content-center">
                    <i class="fab fa-instagram m-auto"></i>
                </div>
                <p class="ms-2">ecoturismolascruces</p>
            </div>
        </div>
        <div class="container video w-100 pb-5">
            <h4 class="pt-5 mb-4 text-orange">¿Cómo llegar?</h4>
            <video class="w-100 h-100 tex" controls>
                <source src="Clase.mp4" type="video/mp4">
            </video>
        </div>
    </section>

    <?php
      if(!empty($_POST["send"])) {
        $name = $_POST["nombre"];
        $email = $_POST["correo"];
        $subject = $_POST["telefono"];
        $content = $_POST["mensaje"];

        $toEmail = "ecoturismodenaturaleza@gmail.com";
        $mailHeaders = "From: " . $name . "<". $email .">\r\n";
        if(mail($toEmail, $subject, $content, $mailHeaders)) {
            $message = "Your contact information is received successfully.";
            $type = "success";
        }
      }
      require_once "contacto.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b6a0ace850.js"></script>
</body>
</html>