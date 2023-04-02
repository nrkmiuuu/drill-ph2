<?php setcookie("key", "valueだよ") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  $_COOKIE['key']
  ?>
</body>
</html>

<!-- //setcookie関数はすべての出力に先立って指定する必要がある
// Cookieを利用する
// index.phpの1行目でcookieにキーと値をセットしています。
// これを11行目で値を表示するように適切な処理を書いてください
// 画面上にcookieでセットしたvalueが表示されること -->