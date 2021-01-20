<html>
<body>
<font size = "7">
    <?php
        $op = $_GET["op"]; 
        $x = $_GET["numx"];
        $y = $_GET["numy"];
        $z;
        if ($op == "+"){
           $z = $x + $y; 
        }
        else if ($op == "-"){
            $z = $x - $y; 
        }
        else if ($op == "*"){
            $z = $x * $y; 
        }
        else if ($op == "/"){
            $z = $x / $y; 
        }
        echo "Show Result<br> X = " .$x;
        echo "<br> Y = ".$y;
        echo "<br> Orpeator = ".$op;
        
        echo "<br> X ".$op." Y = ".$z;
    ?>
</font>
</body>
</html>