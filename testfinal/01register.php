<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>

<body>
    <center>
        <h2>Register</h2>

        <?php
            session_start();
            if(isset($_SESSION['error'])) { 
            echo "<font color='red'>{$_SESSION['error']} </font>";
            unset($_SESSION['error']);
        }
        ?>

        <form action="01insert_db.php" method="post">
            <label for="">Username :</label>
            <input type="text" name="username">
            <br>
            <label for="">Password :</label>
            <input type="password" name="psw1">
            <br>
            <label for="">Confirm Password</label>
            <input type="password" name="psw2">
            <hr>
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </form>
    </center>
</body>

</html>