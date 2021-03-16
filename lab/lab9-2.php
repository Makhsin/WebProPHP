<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 9-2 </title>
</head>

<body>
    <?php if (!isset($_POST['sub'])) { ?>
        <form action="" method="post">
            <label>รับจำนวนนักเรียน</label>
            <input type="text" name="num" value="num">
            <input type="submit" value="submit" name='sub'>
        </form>

    <?php
    } else {

        $MaxStudent = intval($_POST['num']);
        $score = array();
        $grade = array();
        for ($n = 0; $n < $MaxStudent; $n++) {
            $score[$n] = rand(0, 100);
        }
        echo '<center><font size="4" color="blue"> Grade Report </font></center>';
        echo '<table border="1" align="center">';
        echo '<tr><td align="center" width="90">Student No.</td>';
        echo '<td align="center" width="90">Score</td>';
        echo '<td align="center" width="90">Grade</td></tr>';
        for ($n = 0; $n < $MaxStudent; $n++) {
            echo '<tr><td align="center" width="90">' . ($n + 1) . '</td>';
            echo '<td align="center" width="90">' . $score[$n] . '</td>';
            echo '<td align="center" width="90">';
            echo checkscore($score[$n]);
            array_push($grade,$score[$n]);
            echo '</td></tr>';
        }
        $Min = Minx($score);
        $Max = Maxx($score);
        echo '<tr><td colspan="3" align="center"> Average Score : '.average($score, $MaxStudent).'</td></tr>';
        echo '<tr><td colspan="3" align="center">นักเรียน' .$Min.'มีคะแนนต่ำสุด :'.min($score).'</td></tr>';
        echo '<tr><td colspan="3" align="center">นักเรียน' .$Max.' มีคะแนนสูงสุด :'.max($score).'</td></tr>';
        $arr_count = array_count_values($grade);
        echo '<tr><td colspan="3" align="center">เกรด A มีทั้งหมด : ' .$arr_count['A']. '</tr></td></table>';
        echo '<tr><td colspan="3" align="center">เกรด B มีทั้งหมด : ' .$arr_count['B']. '</tr></td>';
        echo '<tr><td colspan="3" align="center">เกรด C มีทั้งหมด : ' .$arr_count['C']. '</tr></td>';
        echo '<tr><td colspan="3" align="center">เกรด D มีทั้งหมด : ' .$arr_count['D']. '</tr></td>';

        }
        function average($data, $max)
        {
            $total = 0;
            for ($n = 0; $n < $max; $n++) {
                $total += $data[$n];
            }
            return ($total / $max);
        }

        function checkscore($num)
        {
            $grade = '';

            if ($num >= 80) {
                $grade = 'A';
                //echo $grade;
            } else if ($num >= 70) {
                $grade = 'B';
                //echo $grade;
            } else if ($num >= 60) {
                $grade = 'C';
                //echo $grade;
            } else if ($num >= 50) {
                $grade = 'D';
                //echo $grade;
            } else {
                $grade = 'F';
                //echo $grade;
            }

            return ($grade);
        }
        
        function Minx($score){
            for ($i=0; $i < count($score); $i++) { 
                if($score[$i] == min($score)){
                return ($i + 1);
                }
            }
            
        }
        function Maxx($score){
            for ($i=0; $i < count($score); $i++) { 
                if($score[$i] == max($score)){
                return ($i + 1);
                }
        }
    }
?>
</body>

</html>