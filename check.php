<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Getリクエスト処理</title>
</head>
<body>
<?php
$no = $_GET["no"];
$nolist = [3, 5, 7, 8, 9];

if(in_array($no, $nolist)) {
    echo "{$no}はありました。";
} else {
    echo "{$no}はありませんでした。";
}
?>
</body>
</html>