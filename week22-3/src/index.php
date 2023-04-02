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
      echo($_POST['keyword']);
  ?>
  <form action="./index.php" method="POST">
    <input type="text" name="keyword">
    <button type='submit'>submit</button>
  </form>
</body>
</html>

<!-- formで入力した値を取得する
index.phpの10行目の???に部分に適切な処理を記述し、formで入力した値を取得してください。
docker compose upしたのちにlocalhost:8080にアクセスし 入力欄に適当な文字を入れてsubmitボタンを押下 画面に入力した値が表示されると完了です。 -->