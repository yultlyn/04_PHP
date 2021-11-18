<?php
$goodList = ['テレビ', 'パソコン', '携帯電話', '冷蔵庫', '洗濯機'];
$id = $_GET['id'];

$itemName = $goodList[$id];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<p><?=$itemName?> が表示されました。</p>
<p><a href="list.php">一覧ページに戻る</a></p>
</body>
</html>
