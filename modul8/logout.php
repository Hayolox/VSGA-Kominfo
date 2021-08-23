<?php 

    //memulai session
    session_start();
    $_SESSION = [];

    //menghapus session
    session_unset();
    session_destroy();

    header("Location: index.php");
    exit;
?>