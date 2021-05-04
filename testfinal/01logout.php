<?php
    session_start();
    session_destroy();
    header('Location: 01login.php');
?>