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
//var_dump($_SESSION);die();
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
<div class="container">
    <form action="../controllers/add_publication.php" method="post">
        <br><br><br>
        <!--Textarea with icon prefix-->
        <div class="md-form">
            <i class="fa fa-pencil prefix"></i>
            <input type="hidden" name="idUser" value="<?php $_SESSION['matricule']?>">
            <textarea type="text" id="form8" class="md-textarea" name="publication"></textarea>
            <label for="form8">Nouvelle Publication</label>
        </div>
        <div class="">
            <button class="btn btn-success btn-lg">Publier</button>
        </div>
    </form>
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
