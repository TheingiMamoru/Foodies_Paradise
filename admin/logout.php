<?php
    session_start();
    unset($_SESSION['a_username']);
    header('location:index.php');
?>