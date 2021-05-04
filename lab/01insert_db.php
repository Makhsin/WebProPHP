<?php
include('01connect.php');
session_start();

$user = $_POST['username'];
$psw1 = $_POST['psw1'];
$psw2 = $_POST['psw2'];

if($psw1 != $psw2){
    $_SESSION['error'] = "รหัสผ่าน หรือ user ไม่ถูกต้อง";
    //header('Location : 01register.php');
    echo "<script>window.history.back();</script>";
} else {
    $sql = "INSERT INTO user(user,password,level)
                        VALUE('$user','$psw1','1')";

    $resule = mysqli_query($conn,$sql);

    if ($resule) {
        header('Location: 01login.php');
    }
}
?>