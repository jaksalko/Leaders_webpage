<?php
    session_start();
    echo "logout";
    unset($_SESSION['login_id']);
    header('Location: '.$_POST['ret_addr']);
?>