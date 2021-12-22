<?php
    session_start();
    if(isset($_SESSION['rgc_userid'])){
        $_SESSION['rgc_userid'] = NULL;
        unset($_SESSION['rgc_userid']);
    }
    header('Location:sign-in.php');
    die;
?>