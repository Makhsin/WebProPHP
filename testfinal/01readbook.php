<!DOCTYPE html>
<html>

<head>
    <title>Readbook</title>
    <meta charset="utf-8">
</head>

<?php
session_start();
include("01connectbook.php");
?>

<body>
    <?php
    $sqltxt = mysqli_query($conn, "SELECT * FROM book order by BookID") or die(mysqli_error($conn));

    echo "<CENTER><H3>รายชื่อหนังสือ</H3>";
    echo "สวัสดี คุณ " . $_SESSION['username'] . "</CENTER><br>";
    echo "<table width=\"400\" border=\"0\" bordercolor=\"D1D7DA\" ";
    echo "align = \"center\" valign = \"top\" >";
    echo "<tr align=\"center\" bgcolor=\"#0099CC\">";
    echo "<td width =\"30\" align=\"center\">ลำดับ</td>";
    echo "<td width =\"100\" align=\"center\" >รหัสหนังสือ</td>";
    echo "<td align=\"center\" width = \"200\">ชื่อหนังสือ</td>";
    echo "<td align=\"center\" width =\"80\" >แก้ไข</a></td>";
    echo "<td align=\"center\" width =\"80\" >ลบ</a></td>";
    
    $a = 1;
    while ($rs = mysqli_fetch_array($sqltxt)) {
        echo "<tr align=\"center\" bgcolor=\"#CCFFFF\">";
        echo "<td align=\"center\" bgcolor =\"#0099CC\">$a</td>";
        echo "<td align=\"center\">";
        echo "<a href=\"detailbook.php?id=$rs[0]\">$rs[0]</a></td>";
        echo "<td align=\"center\">$rs[1]</td>";
        echo "<td align=\"center\"><a href=\"updatebook.php?id=$rs[0]\" ";
        echo "onclick=\"return confirm(' ยืนยันการแก้ไขข้อมูลหนังสือ $rs[1]')\">[แก้ไข]</a></td>";
        echo "<td align=\"center\"><a href=\"del.php?id=$rs[0]\" ";
        echo "onclick=\"return confirm(' ยืนยันการลบข้อมูลหนังสือ $rs[1] ')\">[ลบ] ";
        echo "</a></td>";
        $a++;
    }
    ?>
    </tr>
    </table><br><br>
    <div align="center"> <a HREF="addbook.php">เพิ่มรายการหนังสือ</a></div><br>
    <div align="center"><a href="01logout.php">ออกจากระบบ</a></div>