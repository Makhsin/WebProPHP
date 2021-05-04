<?php
    if(isset($_SESSION['username'])) {
        header('Location: 01readbook.php');
    } else {
        header('Location: 01login.php');
    }
?>