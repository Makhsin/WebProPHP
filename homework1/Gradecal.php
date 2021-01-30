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
          $one = $_GET['1'];
          $two = $_GET['2'];
          $three = $_GET['3'];
          $four = $_GET['4'];
          $five = $_GET['5'];
          $cone = $_GET['cre1'];
          $ctwo = $_GET['cre2'];
          $cthree = $_GET['cre3'];
          $cfour = $_GET['cre4'];
          $cfive = $_GET['cre5'];
          $gone = $_GET['gra1'];
          $gtwo = $_GET['gra2'];
          $gthree = $_GET['gra3'];
          $gfour = $_GET['gra4'];
          $gfive = $_GET['gra5'];
          if($gone || $gtwo || $gthree || $gfour || $gfive == "A")
             if($gone == "A") $gone = 4.0;
             if($gtwo == "A") $gtwo = 4.0;
             if($gthree == "A") $gthree = 4.0;
             if($gfour == "A") $gfour = 4.0;
             if($gfive == "A") $gfive= 4.0;
          if($gone || $gtwo || $gthree || $gfour || $gfive == "B+")
             if($gone == "B+") $gone = 3.5;
             if($gtwo == "B+") $gtwo = 3.5;
             if($gthree == "B+") $gthree = 3.5;
             if($gfour == "B+") $gfour = 3.5;
             if($gfive == "B+") $gfive= 3.5;
          if($gone || $gtwo || $gthree || $gfour || $gfive == "B")
             if($gone == "B") $gone = 3.0;
             if($gtwo == "B") $gtwo = 3.0;
             if($gthree == "B") $gthree = 3.0;
             if($gfour == "B") $gfour = 3.0;
             if($gfive == "B") $gfive= 3.0;
          if($gone || $gtwo || $gthree || $gfour || $gfive == "C+")
             if($gone == "C+") $gone = 2.5;
             if($gtwo == "C+") $gtwo = 2.5;
             if($gthree == "C+") $gthree = 2.5;
             if($gfour == "C+") $gfour = 2.5;
             if($gfive == "C+") $gfive= 2.5;
          if($gone || $gtwo || $gthree || $gfour || $gfive == "C")
             if($gone == "C") $gone = 2.0;
             if($gtwo == "C") $gtwo = 2.0;
             if($gthree == "C") $gthree = 2.0;
             if($gfour == "C") $gfour = 2.0;
             if($gfive == "C") $gfive= 2.0;
          if($gone || $gtwo || $gthree || $gfour || $gfive == "D+")
             if($gone == "D+") $gone = 1.5;
             if($gtwo == "D+") $gtwo = 1.5;
             if($gthree == "D+") $gthree = 1.5;
             if($gfour == "D+") $gfour = 1.5;
             if($gfive == "D+") $gfive= 1.5;
          if($gone || $gtwo || $gthree || $gfour || $gfive == "D")
             if($gone == "D") $gone = 1.0;
             if($gtwo == "D") $gtwo = 1.0;
             if($gthree == "D") $gthree = 1.0;
             if($gfour == "D") $gfour = 1.0;
             if($gfive == "D") $gfive= 1.0;
          if($gone || $gtwo || $gthree || $gfour || $gfive == "F")
             if($gone == "F") $gone = 0.0;
             if($gtwo == "F") $gtwo = 0.0;
             if($gthree == "F") $gthree = 0.0;
             if($gfour == "F") $gfour = 0.0;
             if($gfive == "F") $gfive= 0.0;
        $Cal = ($cone * $gone) + ($ctwo * $gtwo) + ($cthree * $gthree) + ($cfour * $gfour) + ($cfive * $gfive);
        $total = $Cal / ($cone + $ctwo + $cthree + $cfour + $cfive);
        ?>
        <label> Subject 1 : <?php echo $one;?> </label>
        <label> Credit : <?php echo $cone;?> </label>
        <label> Grade got : <?php echo $gone;?> </label><br>
        <label> Subject 2 : <?php echo $two;?> </label>
        <label> Credit : <?php echo $ctwo;?> </label>
        <label> Grade got : <?php echo $gtwo;?> </label><br>
        <label> Subject 3 : <?php echo $three;?> </label>
        <label> Credit : <?php echo $cthree;?> </label>
        <label> Grade got : <?php echo $gthree;?> </label><br>
        <label> Subject 4 : <?php echo $four;?> </label>
        <label> Credit : <?php echo $cfour;?> </label>
        <label> Grade got : <?php echo $gfour;?> </label><br>
        <label> Subject 5 : <?php echo $five;?> </label>
        <label> Credit : <?php echo $cfive;?> </label>
        <label> Grade got : <?php echo $gfive;?> </label><br>
        <label> GPA got : <?php echo $total;?> </label><br>
        <a href="Grade.php"> Back </a>
    </center>
</body>

</html>