<?php
session_start();
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 05/04/2018
 * Time: 10:04 AM
 */
if (!isset($_SESSION['matricule'])){
    header('Location: login.php') ;
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="icon" href="static/img/esis.png">
    <title>ESIS-OJ</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="static/css/font-awesome.css">

    <!-- Bootstrap core CSS -->
    <!--    <link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Material Design Bootstrap -->
    <link href="static/css/compiled.min1c9b.css" rel="stylesheet">
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>
<!--Navbar-->
<?php include_once ('head.php');?>
<!--/.Navbar-->
<!--Header-->
<div class="text-xs-center">
    <h3><i class="fa fa-star"></i> Top 1</h3>
    <hr>
</div>
<div class="container">
    <div class="col-md-12">
        <!--First review-->
        <div class="media">
            <a class="media-left waves-light">
                <img class="rounded-circle" src="static/img/vision.jpg" alt="Publication image" style="height: 100px; width: 100px">
            </a>
            <div class="media-body">
                <h5 class="media-heading">Titre Publication</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi cupiditate temporibus iure soluta. Quasi mollitia maxime nemo quam accusamus possimus, voluptatum expedita assumenda. Earum sit id ullam eum vel delectus!
                    <a href="#">Lire la suite</a></p>
                <div class="col-xs-12"></div>
                <div class="col-xs-4">
                    <span class="right">Posté le 05/04/2018</span>
                </div>
                <div class="col-xs-8">
                    <span class="left"><a href="">Like</a>(9)</span>
                    <span class="left"><a href="">Dislike</a>(9)</span>
                </div>
            </div>
        </div>
        <hr>
        <!--Second review-->
        <div class="media">
            <a class="media-left waves-light">
                <img class="rounded-circle" src="static/img/vision.jpg" alt="Publication image" style="height: 100px; width: 100px">
            </a>
            <div class="media-body">
                <h5 class="media-heading">Titre Publication</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi cupiditate temporibus iure soluta. Quasi mollitia maxime nemo quam accusamus possimus, voluptatum expedita assumenda. Earum sit id ullam eum vel delectus!
                    <a href="#">Lire la suite</a></p>
                <div class="col-xs-12"></div>
                <div class="col-xs-4">
                    <span class="right">Posté le 15/05/2018</span>
                </div>
                <div class="col-xs-8">
                    <span class="left"><a href="">Like</a>(12)</span>
                    <span class="left"><a href="">Dislike</a>(3)</span>
                </div>
            </div>
        </div>
        <hr>
    </div>
</div>
<?php include_once ('foot.php');?>
<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="static/js/jquery-3.1.1.min.js"></script>

<!-- Tooltips -->
<script type="text/javascript" src="static/js/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
<!---->
<!-- MDB core JavaScript -->
<script type="text/javascript" src="static/js/compiled.min324d.js"></script>
<script>
    new WOW().init();

    // MDB Lightbox Init
    //        $(function () {
    //            $("#mdb-lightbox-ui").load("assets/mdb-lightbox-ui.html");
    //        });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>
