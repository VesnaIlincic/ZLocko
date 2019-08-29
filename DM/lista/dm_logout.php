<?php
session_start();
require_once 'dm_konekcija.php';
if(isset($_SESSION['id']))
{
    session_unset();
    session_destroy();
    header('Location: dm_login.php');
}

?>

               