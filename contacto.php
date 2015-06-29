<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('head.php'); ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contacto | Quanta Shares</title>

    </head>
    <body>
        <?php include('header.php'); ?>

        <div class="linea-gris"></div>

        <div class="container body-gris">

            <div class="row contenido-contacto">
                <div class="titulo">
                    <div class="col-md-1 col-lg-2"></div>
                    <div class="col-md-10 col-lg-10 titulo-interior-contacto">
                        <h1>Contáctanos</h1>
                    </div>
                </div>

                <div class="form-contacto">
                    <form>
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre"><br>
                        <label for="email">E-mail:</label>
                        <input type="text" name="email"><br>
                        <label for="empresa">Empresa:</label>
                        <input type="text" name="empresa"><br>
                        <label for="mensaje">Mensaje:</label>
                        ​<textarea name="mensaje" rows="8" cols="60"></textarea><br><br>
                        <input class="btn-contacto" type="submit">
                    </form>
                </div>

                <div class="clearfix"></div>

                
            </div>
        </div>

        <?php include('footer.php');?>
    </body>
</html>