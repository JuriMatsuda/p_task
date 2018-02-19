<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>フォーム入力処理</title>
</head>
<body>
<div>
    <?php
    $tanka = $_POST["tanka"];
    $kosu = $_POST["kosu"];
    $price = $tanka * $kosu;

    $tanka = number_format($tanka);
    $price = number_format($price);

    echo "単価{$tanka}円 * 個数{$kosu}個は{$price}円です。";
    ?>
</div>
</body>
</html>