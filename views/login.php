<?php
session_start();
    $error ='';
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

<!--Navigation & Intro-->
<header>

    <!--Navbar-->
    <nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar">

        <!-- Collapse button-->
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
            <i class="fa fa-bars"></i></button>

        <div class="container">
            <!--Collapse content-->
            <div class="collapse navbar-toggleable-xs" id="collapseEx">
                <!--Navbar Brand-->
                <a class="navbar-brand" href="accueil.php"><img class="animated pulse infinite" src="static/img/esis.png" alt="logo"style="height:50px"> ESIS-OJ</a>
                <!--Links-->
                <div class="col-md-7 offset-md-3 car-block">
                    <form method="post" action="../controllers/new_connexion.php">
                        <?php
                        if (isset($_GET['error'])){
                            if($_GET['error'] == 3){
                                $error = "Matricule ou mot de passe incorrect!";
                                echo "<h5 class='alert alert-danger alert-dismissible'><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>".$error."</h5>";
                            }

                        }
                        ?>
                        <div class="col-md-4">
                            <i class="fa fa-user prefix"></i>
                            <input type="text" id="mymatricule" class="form-control" name="matricule">
                            <label for="mymatricule">Matricule</label>
                        </div>
                        <div class="col-md-4">
                            <i class="fa fa-user prefix"></i>
                            <input type="password" id="mypwd" class="form-control" name="pwd">
                            <label for="mypwd">Mot de passe</label>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-success btn-lg">Connexion</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--/.Collapse content-->
        </div>
    </nav>
    <!--/.Navbar-->
    <!--Mask-->
    <div class="clearfix"></div>
    <div class="view hm-black-strong">
        <div class="full-bg-img flex-center">
            <main style="margin-top: 70px;">
                <div class="container">
                    <div class="row" id="home">

                        <!--First column-->
                        <div class="col-lg-6">
                            <div class="description">
                                <h2 class="h2-responsive wow fadeInLeft">ESIS-OJ</h2>
                                <hr class="hr-light wow fadeInLeft">
                                <p class="wow fadeInLeft" data-wow-delay="0.4s">ESIS-OJ est un journal libre ouvert à tous les  étudiants de l'ESIS.</p>
                                <p class="wow fadeInLeft" data-wow-delay="0.4s">Poster vos appréciations ou critiques, récommandation ou information</p>
                                <br><br><img class="animated bounce infinite" src="static/img/esis.png" alt="logo"style="height: 100px;margin-left: 30%">
                                <br>
                            </div>
                        </div>
                        <!--/.First column-->

                        <!--Second column-->
                        <div class="col-lg-6">
                            <!--Form-->
                            <div class="card wow fadeInRight">
                                <div class="card-block">
                                    <!--Header-->
                                    <div class="text-xs-center">
                                        <h3>Creer un compte:</h3>
                                        <hr>
                                    </div>
                                    <!--Body-->
                                    <form method="post" action="../controllers/add_compte.php">
                                        <?php
                                            if (isset($_GET['error'])){
                                                if($_GET['error'] == 1){
                                                    $error = "Les deux mots de passe ne sont pas identiques!";
                                                    echo "<h5 class='alert alert-danger alert-dismissible'><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>".$error."</h5>";
                                                }

                                            }
                                        ?>
                                        <div class="md-form">
                                            <i class="fa fa-user prefix"></i>
                                            <input type="text" id="matricule" class="form-control" name="matricule">
                                            <label for="matricule">Matricule</label>
                                        </div>
                                        <div class="md-form">
                                            <i class="fa fa-key prefix"></i>
                                            <input type="password" id="pwd" class="form-control" name="pwd">
                                            <label for="pwd">Mot de Passe</label>
                                        </div>
                                        <div class="md-form">
                                            <i class="fa fa-key prefix"></i>
                                            <input type="password" id="pwdConfirm" class="form-control" name="pwdconf">
                                            <label for="pwdConfirm">Confirmer Mot de Passe</label>
                                        </div>
                                        <div class="text-xs-center">
                                        <button class="btn btn-primary btn-lg" >Créer un compte</button>
                                        <hr>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <!--/.Form-->
                        </div>
                        <!--/Second column-->
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!--/.Mask-->
</header>
<!--/Navigation & Intro-->
<!--Footer-->
<footer class="page-footer center-on-small-only">
    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            &copy; 2018 Copyright: <a href="http://p-breakers.org/"> P-Breakers </a>
        </div>
    </div>
    <!--/.Copyright-->
</footer>
<!--/.Footer-->
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
