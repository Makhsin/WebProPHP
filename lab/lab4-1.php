<html>
    <head>
        <title>กำหนดค่าตัวแปร</title>
    </head>
    <body>
        <?php
        $x = 100;
        $y = "200";
        $z = '300';
        $add = $x + $y;
        $sub = $z - $x;
        $sar = $y * $z;
        $bar = $sar / $z;
        $message ="Hello World";
        echo $x; echo "<br />";
        echo $y; echo "<br />";
        echo $z; echo "<br />";
        echo "ผลบวก"; echo $add; echo "<br />";
        echo "ผลลบ"; echo $sub; echo "<br />";
        echo "ผลคูณ"; echo $sar; echo "<br />";
        echo "ผลหาร"; echo $bar; echo "<br />";
        echo $message; echo "<br />";
            ?>
    </body>
</html>