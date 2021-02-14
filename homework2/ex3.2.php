<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Monda&display=swap" rel="stylesheet">
    <title>Rssult Lottery</title>

    <style>
        body {
            font-family: 'Monda', sans-serif;
        }

        button {
            width: 100px;
            height: 50px;
        }
        img{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }
    </style>
</head>

<body>
    <?php
    $number = $_POST['num'];
    $price = $_POST['price'];
    $check = false;

    if ($number == $lottery = rand(0, 99)) {
        $massage = "ยินดีด้วยคุณถูกรางวัล";
        $check = true;
    } else $massage = "เสียใจด้วยคุณไม่ถูกรางวัล";


    if ($check) {
        $price = $price * 60;
    }
    ?>
    <center>
        <h1><?php echo $massage; ?></h1>
        <?php if ($check) { ?>
            <h2>คุณได้รับเงินรางวัล <?php echo number_format($price); ?> บาท</h2>
            
        <?php } else { ?>
            
        <?php } ?>
        <br><br><a href="ex3.1.php"><button type="submit">Back</button></a>
        <br>
        <h3>รางวัล เลขที่ออก คือ : <font size="5"><?php echo $lottery; ?></font></h3>
    </center>

</body>

</html>