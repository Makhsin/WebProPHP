<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <?php
        $fins = $_GET['fin'];
        $mids = $_GET['mid'];
        $asss = $_GET['ass'];
        $homes = $_GET['home'];
        $total = $fins + $mids + $asss + $homes;
        if($total <= 49)
            $grade ="F";
        if($total >= 50 && $total <= 55)
            $grade ="D";
        if($total >= 56 && $total <= 60)
            $grade ="D+";
        if($total >= 61 && $total <= 65)
            $grade ="C";
        if($total >= 66 && $total <= 70)
            $grade ="C+";
        if($total >= 71 && $total <= 75)
            $grade ="B";
        if($total >= 76 && $total <= 80)
            $grade ="B+";
        if($total >= 81 && $total <= 100)
            $grade ="A";    
        ?>
        <label> Final score : <?php echo $fins;?> </label><br>
        <label> Midterm score : <?php echo $mids;?> </label><br>
        <label> Assignment score : <?php echo $asss;?> </label><br>
        <label> Homework score : <?php echo $homes;?> </label><br>
        <label> Total Score : <?php echo $total;?> </label><br>
        <label> Your Grade is : <?php echo $grade;?> </label><br>
        <a href="Sumnum.php"> Back </a>
    </center>
</body>

</html>