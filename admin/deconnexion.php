<?php
session_start();

if(isset($_SESSION['rtdfzk655dnDTsb'])){

    $_SESSION['rtdfzk655dnDTsb'] = array();

    session_destroy();

    header("Location: ../");
}else{
    header("Location: ..login.php");
}

?>