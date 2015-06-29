<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('head.php'); ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home | Quanta Shares</title>

    </head>
    <body>
        <?php include('header.php'); ?>

        <div class="container banner-imagenes">
            <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="8000" id="bs-carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#bs-carousel" data-slide-to="1"></li>
                    <li data-target="#bs-carousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item slides active">
                        <div class="slide-1"></div>
                    </div>
                    <div class="item slides">
                        <div class="slide-2"></div>
                    </div>
                    <div class="item slides">
                        <div class="slide-3"></div>
                    </div>
                </div> 
            </div>    
        </div>

        <div class="container body-gris">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 titulo-interior">
                <ul class="header-interior">
                    <li><img src="resources/img/_home/_btn_1.png"/></li>
                    <li>Productos</li>
                </ul>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 home-dolar azul">
                    <img src="resources/img/_home/_logo_DolarT.png"class="img-responsive centrar">
                    <p>Consiste en replicar el rendimiento diario del tipo de cambio Peso Dólar.</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 azul">
                    <img src="resources/img/_home/_logo_PesoT.png"class="img-responsive centrar">
                    <p>Consiste en replicar el rendimiento diario del tipo de cambio Dólar Peso.</p>
                </div>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 titulo-interior">
                
                <ul class="header-interior">
                    <li><img src="resources/img/_home/_btn_1.png"/></li>
                    <li>Tipo de Cambio</li>
                </ul>
                <div class="azul">
                    <p>Sabemos que los resultados en la administración de carteras dependen de las estrategias de diversificación de activos financieros y controles de riesgos.</p>
                    <img src="resources/img/_home/_img_Tipo_Cambio.png" class="responsive-img">
                </div>
            </div>
        </div>
        
        <?php include('footer.php');?>
    </body>
</html>