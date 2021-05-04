<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>login</title>
</head>

<?php
    include('01connect.php');
    session_start();

    if(isset($_POST['sub'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM user WHERE user = '$user' AND password = '$pass'";
        $resule = mysqli_query($conn, $sql);

        if(mysqli_num_rows($resule) > 0){
            $output_data = mysqli_fetch_array($resule);
            $_SESSION['username'] = $output_data['user'];
            header('Location: 01readbook.php');
        } else {
            $mas = 'รหัส หรือ username ไม่ถูกต้อง';
        }
    }
?>

<body>
    <center>
        <h2>login</h2>
        <?php
            if(isset($mas)){
                echo "<font color ='red'>$mas</font>";
            }
        ?>
        <form action="" method="post">
            <label for="">Username : </label>
            <input type="text" name="user">
            <br>
            <label for="">Password :</label>
            <input type="password" name="pass">
            <br>
            <button type="submit" name="sub">Submit</button>            
        </form>
        <a href="01register.php">Register</a>
    </center>
</body>
</html>