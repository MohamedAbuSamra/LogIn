<?php

//PHP file too keep activing the logged in for the user.
session_start();

if(!isset($_SESSION['isLogged']) or '1' != $_SESSION['isLogged'])
header('Location: ' . '../index.php');

?>