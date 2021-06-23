<?php
//to have the data seesion from the index file
session_start();

if(isset($_SESSION['isLogged'])) 
unset($_SESSION['isLogged']);
header('Location:' . '../index.php');
session_destory();

?>