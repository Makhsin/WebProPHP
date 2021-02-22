<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr,
        td {
            border: 2px solid black;
            height: 100px;
        }

        table {
            width: 70%;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>

<body>
    <center>
        <table>
            <!-- <tr>
        <td><?php echo rand(0, 99); ?></td>
        <td><?php echo rand(0, 99); ?></td>
        <td><?php echo rand(0, 99); ?></td>
        <td><?php echo rand(0, 99); ?></td>
        <td><?php echo rand(0, 99); ?></td>
    </tr>
    <tr>
        <td><?php echo rand(0, 99); ?></td>
        <td><?php echo rand(0, 99); ?></td>
        <td><?php echo rand(0, 99); ?></td>
        <td><?php echo rand(0, 99); ?></td>
        <td><?php echo rand(0, 99); ?></td>
    </tr>
    <tr>
        <td><?php echo rand(0, 99); ?></td>
        <td><?php echo rand(0, 99); ?></td>
        <td><?php echo rand(0, 99); ?></td>
        <td><?php echo rand(0, 99); ?></td>
        <td><?php echo rand(0, 99); ?></td>
    </tr>
    <tr>
        <td><?php echo rand(0, 99); ?></td>
        <td><?php echo rand(0, 99); ?></td>
        <td><?php echo rand(0, 99); ?></td>
        <td><?php echo rand(0, 99); ?></td>
        <td><?php echo rand(0, 99); ?></td>
    </tr>
    <tr>
        <td><?php echo rand(0, 99); ?></td>
        <td><?php echo rand(0, 99); ?></td>
        <td><?php echo rand(0, 99); ?></td>
        <td><?php echo rand(0, 99); ?></td>
        <td><?php echo rand(0, 99); ?></td>
    </tr>
    -->
            <?php
            for ($row = 0; $row < 5; $row++) {
                echo "<tr>";
                for ($col = 0; $col < 5; $col++) {
                    echo "<td> " . rand(0, 99) . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </center>
</body>

</html>