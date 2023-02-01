<?php
/*
require_once 'assets/include/config.php';

$conexao = new conexao();
$con = $conexao->conecta();
*/
?>
<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Alsite DevTeam">

    <title>TITULO DO SITE</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="//site-assets.fontawesome.com/releases/v6.1.2/css/all.css">

    <!-- build:css -->
    <link href="assets/css/app.css" rel="stylesheet">
    <!-- endbuild -->

</head>

<body class="d-flex flex-column h-100">

    <div role="main" class="flex-shrink-0">

        <?php include 'header.php'; ?>

        <div class="container text-center" style="margin-top:50px;">
            <h3 style="font-weight: bold;">Localização</h3>
            <p>Conheça mais Sobre nós</p>
            <hr>
        </div>
        <div class="container text-center" style="margin-top:70px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.0345899713334!2d-47.43169389848161!3d-20.545765590305457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b0a7e86ace2233%3A0xac6ab9bb2ebc573d!2sAv.%20Wilson%20S%C3%A1bio%20de%20Mello%2C%202080%20-%20S%C3%A3o%20Joaquim%2C%20Franca%20-%20SP%2C%2014406-052!5e0!3m2!1spt-BR!2sbr!4v1661879035303!5m2!1spt-BR!2sbr" width="1100" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="container text-center" style="margin-top:70px; margin-bottom: 200px;">
            <div class="row">
                <div class="col-12 col-md-4 form-group text-center ">
                    <a href="index.php"><img src="assets/img/logo_k2.png" style="width: 130px;" alt=""></a>
                </div>
                <div class="col-12 col-md-3 form-group">
                    <i style="font-size: 40px;" class="fa-light fa-money-bill-1-wave"></i>
                    <p style="font-size: 19px;">Melhores Preços do Mercado</p>
                </div>
                <div class="col-12 col-md-3 form-group">
                    <i style="font-size: 40px;" class="fa-light fa-comments"></i>
                    <p style="font-size: 19px;">Entre Agora em Contato</p>
                </div>
            </div>
        </div>


    </div>

    <?php include 'footer.php'; ?>


    <!-- build:js -->
    <script src="assets/js/app.js"></script>
    <!-- endbuild -->

    <script>

    </script>

</body>

</html>