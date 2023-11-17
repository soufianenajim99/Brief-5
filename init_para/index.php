<?php 
require_once('../app/models/init_para.php');

$init = new Init_para() ; 

$init->createdb();
// $init->createtables();

// header('Location: ../index.php');




?>
