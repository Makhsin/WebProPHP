<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <form action="" method="get">
            <label>ค่าเริ่มต้น : </label>
            <input type="number" name="st"><br>
            <label>ค่าสุดท้าย : </label>
            <input type="number" name="ls"><br>
            <label>ตัวเลขที่นำไปหาร : </label>
            <input type="number" name="div"><br>
            <button type="submit" name="check"> Check Num </button>
        </form>

        <?php
        $co = 0;
        $co1 = 0;
        if (isset($_GET['check'])) {
            $st = $_GET['st'];
            $ls = $_GET['ls'];
            $div = $_GET['div'];
            checkNum();
            countNum();
            sumNum();
        }
        function checkNum()
        {
            global $st;
            global $ls;
            global $div;
            global $co;
            global $co1;
            for ($i = $st; $i <= $ls; $i++) {
                if ($i % $div == 0) {
                    echo $i . ' , ';
                    //$co1 = $co1 + $i;
                    $co1 += $i;
                    $co++;
                }
            }
        }
        function countNum()
        {
            global $co;
            echo "<br>จำนวนที่หารลงตัว = $co ตัว";
        }
        function sumNum()
        {
            global $co1;
            echo "<br>ผลรวมของตัวเลบที่หารลงตัว = $co1 ";
        }
        ?>
    </center>
</body>

</html>