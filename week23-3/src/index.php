<?php
    session_start();
    # nameというkeyに、POSSEという値をセットする
    $_SESSION['name'] = 'POSSE';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?= $_SESSION["name"] ?>
</body>
</html>

<!-- 
Sessionを利用する

index.phpの3行目でsessionにキーと値をセットしてください。
キーはname、値はPOSSEとしてください。

### 終了条件
画面上にsessionでセットした値が表示されること -->

<!-- $_SESSION[キー名] = 値; -->