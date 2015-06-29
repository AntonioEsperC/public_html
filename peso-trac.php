<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('head.php'); ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Peso Trac | Quanta Shares</title>
    </head>
    <body>
        <?php include('header.php'); ?>

        <div class="linea-gris"></div>

<!-- Modal -->

<div style="margin-top: 100px;" class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-container">
            <div class="modal-header">
                <h1>Descargables</h1>
            </div>
            <div class="modal-body">
                <a href="#">
                    <ul>
                        <li>CARTRAC</li>
                        <li><img src="resources/img/_producto/_flecha_descarga.png"></li>
                    </ul>
                </a>
                <br>
                <a href="#">
                    <ul>
                        <li>FACT SHEET</li>
                        <li><img src="resources/img/_producto/_flecha_descarga.png"></li>
                    </ul>
                </a>
                <br>
                <a href="#">
                    <ul>
                        <li>PROSPECTO</li>
                        <li><img src="resources/img/_producto/_flecha_descarga.png"></li>
                    </ul>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Ends -->

        <div class="container body-gris">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 titulo-interior-dolar">
                <ul class="header-interior-dolar">
                    <li><img src="resources/img/_home/_btn_1.png"/></li>
                    <li>Productos</li>
                </ul>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 home-dolar azul">
                    <p style="padding-left: 120px;">El <strong><span style="color: #00A7CA;">ETF Peso</span></strong> Trac es un instrumento innovador en el mercado mexicano ya que consiste en replicar el rendimiento diario del tipo de cambio Dólar/Peso.<br>Con este producto puedes obtener rendimiento cuando el Peso tiene un movimiento revaluatorio sin necesidad de tener que abrir contratos complicados como contratos de derivados o restrictivos como las sociedades de inversión.</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 azul">
                    <p style="padding-right: 120px;">Tiene la ventaja de seguir el movimiento del índice BMV USD-MXN, por esta razón genera valor cuando el peso lo gana.<br><br><br>Un ejemplo de la forma de usar este instrumento es comprar Peso Trac cuando se cree que el peso ganará valor.</p>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <img src="resources/img/_producto/_logo_peso_trac.png" height="65px"/>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <a href="#" data-toggle="modal" data-target="#login-modal" id="link-modal">
                        <ul class="header-interior">
                            <li>Descargables</li>
                            <li><img src="resources/img/_home/_btn_1.png"/></li>
                        </ul>
                    </a>
                </div>
                <div class="imagenes-dolar">
                    <img src="resources/img/_producto/_grafica_peso_trac.png">
                </div>
            </div>
        </div>

        <?php include('footer.php');?>
    </body>
</html>