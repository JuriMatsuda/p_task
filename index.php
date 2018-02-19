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
    <form method="POST" action="calc.php">
        <ul>
            <li><label>単価：<input type="number" name="tanka"></label></li>
            <li><label>個数：<input type="number" name="kosu"></label></li>
            <li><input type="submit" value="submit!!"></li>
        </ul>
    </form>

    <form method="get" action="check.php">
        <ul>
            <li><label>番号：<input type="number" name="no"></label></li>
            <li><label><input type="submit" value="search!!"></label></li>
        </ul>
    </form>
</div>
</body>
</html>