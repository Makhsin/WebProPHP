<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> โปรแกรมคำนวณเกรด </title>
</head>
<body>
    <?php
        $hw = $_GET['hw'];
        $midterm = $_GET['midterm'];
        $final = $_GET['final'];
        if ($hw > 30) $hw = 30;
        if ($midterm > 35) $midterm = 35;
        if ($final > 35) $final = 35;

        echo "<p>";
        echo "<b>ข้อมูลคะแนน </b><br />";
        echo "Homework : <i> $hw </i> <br/>";
        echo "Midterm : <i> $midterm </i> <br/>";
        echo "Final : <i> $final </i> <br/>";
        $total = $hw + $midterm + $final;

        echo "Total Score : $total <br>";
        if ($total >= 80) echo "Result Grade : <br> <img src = image/A.jpg width = 100>";
        elseif ($total >= 70) echo "Result Grade : <br> <img src = image/B.jpg width = 100>";
        elseif ($total >= 60) echo "Result Grade : <br> <img src = image/C.jpg width = 100>";
        elseif ($total >= 50) echo "Result Grade : <br> <img src = image/D.jpg width = 100>";
        else echo "Result Grade : <br> <img src = image/F.jpg width = 100>";
        echo "<br>";
        echo "<a href='lab6-11.php'> <big>Back </big></a>"; 
    ?>

</body>
</html>