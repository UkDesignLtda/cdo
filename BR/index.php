<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <title>Cândido de Oliveira Advogados - Desde 1899</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link href="../styles/fontawesome-all.min.css" rel="stylesheet" type="text/css"> 
    <link href="../styles/cdo-base.css" rel="stylesheet" type="text/css"/>
    <style>
        body,
        html {
            font-size: 14px;
            font-family: "Open Sans", Helvetica, Arial, sans-serif;
        }
        
       @media (min-width: 1620px) {
            .container {
            max-width: 1600px!important;
            padding-right: 150px;
            }
        }
        .fundo-site {
            background: #cecece;
        }
        
        .barra-linguas,
        .barra-logo {
            margin: 0 auto;
        }
        
        .barra-linguas {
            height: 30px;
            background: #010101;
        }
        .barra-logo {
            height: 104px;
            background: #792121;
        }
        .form-busca {
            height: 22px;
            max-width: 250px;
        }
        .logo {
            width: 510px;
            height: auto;
            position: absolute;
            top: 20px;
            z-index: 1000;
        }
        a {
            color: #cecece;
        }
        .fotos.container {
            padding: 0;
            border-top: 4px solid #fff;
            border-bottom: 4px solid #fff;
        }
        .foto-atual {
            padding: 0;
            width: 100%;
        }
        
        /*!Menu Princial */
        .menu-horizontal {
            display: block;
            background: rgba( 0, 0, 0, .85 );
            width: 1600px;
            margin-left: 0px;
            padding-top: 1px;
        }
        
/*
        .menu-horizontal {
            bottom: 0;
            width: 1080px;
            margin-left: 0;
        }
*/
        .menu-principal {
            padding-top: 0;
            display: block;
            width: 722px;
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
        .menu-principal li a {
            font-size: 12px;
        }

    </style>
    </head>
<body>
    <div class="fundo-site container-fluid">
        <div class="row">
            
            <header>
                <!--!Barra Linguas/Carreiras -->
                <div class="barra-linguas container">
                    <div class="row justify-content-end no-gutters">
                        <div class="col">
                          One of two columns
                        </div>
                        <div class="col-2">
                            <!--!Link:Carreira -->
                            <a class="link-carreira" href="carreira.php">CARREIRA</a>
                            <!--!Link: Linguas -->
                            <a class="lingua" href="../EN/index.php">ENG</a>
                            <a class="lingua marcado" href="#">PORT</a>
                        </div>
                    </div>
                </div>
            
                <!--!Barra Logo/Busca-->
                <div class="barra-logo container">  
                    <div class="row justify-content-end no-gutters">
                        <div class="col-4">
                        	<div class="logo col align-self-center">
                            	<a href="index.php"><img src="../images/logo-candido-de-oliveira-advogados.png" alt="logo-candido-de-oliveira-advogados" width="510" height="auto" /></a>
                        	</div>
                        </div>
                        <div class="col-4">
                    	    <div class="form-busca col align-self-end">
                                <div class="input-group mb-2 mb-sm-0">
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="busca">
                                    <div class="input-group-addon"><i class="fas fa-search"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--!Slider-->
                <div class="fotos container">
                    <div id="row no-gutters">
                        <div class="foto-atual col">
                            <img src="../images/slide-advogados-pb.png"/ class="img-fluid">
                        </div>
                    </div>
                </div>
                <nav class="menu-horizontal">
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
            </header>
            
            
        </div>
    </div>
</body>
</html>