<?php
session_start();
unset($_SESSION['userlogin']);
error_reporting(0);
echo ("<script LANGUAGE='JavaScript'>
    window.location.href='../landing.php';
    </script>");
?>
