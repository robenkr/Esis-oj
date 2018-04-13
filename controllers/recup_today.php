<?php
require_once ('../models/dao/connexiondb.class.php');
require_once ('../models/structure/publication.class.php');
require_once ('../models/dao/publication.dao.php');

//    $publication = new Publication();
$publicationdao = new PublicationDAO();
$today = date('Y-m-d');
$res = $publicationdao->today($today);