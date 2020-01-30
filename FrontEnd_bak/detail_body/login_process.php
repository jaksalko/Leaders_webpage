<?php
    session_start();
    echo "login";
    echo $_POST['id'];
    $_SESSION['login_id'] = $_POST['id'];
    header('Location: '.$_POST['ret_addr_in']);

?>