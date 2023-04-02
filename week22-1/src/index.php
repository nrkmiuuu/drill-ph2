<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php include(dirname(__FILE__) . "/components/header.php"); ?>
</body>
</html>

// index.phpの10行目の???に部分に適切な処理を記述し、header.phpを読むこんでください。
//docker compose upしたのちにlocalhost:8080にアクセスし「ヘッダーだよ。共通部分だよ。」と表示されると完了です。
//PHPで外部ファイルを読み込む際は、include関数