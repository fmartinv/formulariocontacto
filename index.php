<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulario Construcción</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center mt-5 pt-5">
            <div class="col-md-7">
                <h1 class="display-4">Formulario</h1>
                <hr class="bg-info">  
                <p class="pb-0 mb-0">Te invitamos a contactarnos, te responderemos a la brevedad.</p>  
                <p class="text-danger small pt-0 mt-0">*Todos los campos son obligatorios</p>
                <div class="alert alert-success d-none" id="mensajeExito">Mensaje enviado con éxito</div>
                <div class="alert alert-danger d-none" id="mensajeError"></div>
                <form id="formulario" novalidate>
                    <div class="row form-group">
                        <label for="nombre" class="col-form-label col-md-4">Nombre:</label>
                        <div class="col-md-8">
                            <input type="text" name="nombre" value="" id="nombre" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="email" class="col-form-label col-md-4">E-mail:</label>
                        <div class="col-md-8">
                            <input type="email" name="email" value="" id="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="mensaje" class="col-form-label col-md-4">Mensaje:</label>
                        <div class="col-md-8">
                            <textarea rows="3" class="form-control" id="mensaje" name="mensaje" required></textarea>
                        </div>
                    </div>
                    <div>
                        <?php
                        require_once('recaptchalib.php');
                        $publickey = "llavePublica"; // you got this from the signup page
                        echo recaptcha_get_html($publickey);
                        ?>
                    </div>  
                    <button type="submit" class="btn btn-info">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="formulario.js"></script>
  </body>
</html>