<!DOCTYPE html>
<html>
<head>
    <title>Cândido de Oliveira Advogados - Desde 1899</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Roboto" rel="stylesheet">
    <link href="../styles/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../styles/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
    <link href="../styles/cdo-base.css" rel="stylesheet" type="text/css"/>
    <style>
        /* Para esta página somente */
        body {
            background: #cecece;
        }
        .container {
            background: #fff;
        }
        .menu-vertical {
            bottom: 0;
            width: 1080px;
            margin-left: 0;
        }
        .menu-principal {
            padding-top: 0;
            display: block;
            width: 716px;
            margin: 0 auto;
            bottom: 0;
        }
        .menu-principal li {
            display: inline-block;
            margin-left: 0;
            padding-right: 15px;
            padding-left: 15px;
            border: 0;
            border-right: 1px solid #5c5c5c;
        }
        .menu-principal li:last-child {
            border: 0;
            border-right: 0 solid transparent;
        }
        .menu-principal li {
            padding-top: 0px;
            padding-bottom: 5px;
            margin-top: 12px;
            margin-bottom: 12px;
        }
        .barra-menu-slider {
            height: 396px;
        }
        
        .menu-principal li a {
            font-size: 12px;
        }
        @media (min-width: 1620px) {
            .container {
            max-width: 1600px!important;
            }
        }
    </style>
</head>
<body class="home">

<?php require 'tplt-cabecalho.php'; ?>

    <section class="barra-menu-slider container">
        <div class="row no-gutters">
            <nav class="menu-vertical">
                <ul class="list-unstyled menu-principal">
                    <li class=""><a href="o-escritorio.php">O ESCRITÓRIO</a></li>
                    <li class=""><a href="tradicao.php">TRADIÇÃO</a></li>
                    <li class=""><a href="area-de-atuacao.php">ÁREA DE ATUAÇÃO</a></li>
                    <li class=""><a href="advogados.php">ADVOGADOS</a></li>
                    <li class=""><a href="noticias.php">NOTÍCIAS</a></li>
                    <li class=""><a href="carreira.php">CARREIRA</a></li>
                    <li class=""><a href="contato.php">CONTATO</a></li>
                </ul>
            </nav>
            <div class="slider col" id="index-slider">
                <img src="../images/slide-advogados-pb.png"/>
                <img src="../images/slide-advogados-pb.png"/>
                <img src="../images/slide-advogados-pb.png"/>
            </div>
<!--
            <div class="row">
                <!-- Controles do slider -->
<!--
                <div class="col-md-6"><span class="slidesjs-previous slidesjs-navigation glyphicon glyphicon-chevron-left"></span></div>
                <div class="col-md-6 text-right"><span class="slidesjs-next slidesjs-navigation glyphicon glyphicon-chevron-right "></span></div>
            </div>
-->
        </div>
    </section><!-- lembrar da barra verde no final dessa seção -->

<section class="conteudo-da-pagina">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="container">
                <div class="col-md-12">
                    <h1>h1. Titulo</h1>
                    <h2>h2. Titulo</h2>
                    <h3>h3. Titulo</h3>
                    <h4>h4. Titulo</h4>
                    <h5>h5. Titulo</h5>
                    <h6>h6. Titulo</h6>
                    <p>TODO write contents</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require 'tplt-rodape.php'; ?>

<script src="../scripts/cdo.js" type="text/javascript"></script>

</body>
</html>
