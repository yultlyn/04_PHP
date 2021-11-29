<?php

$item = 'バナナ';
if (!empty($_POST)) {
    $item = $_POST['item'];
}


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
    <!-- 初回訪問時は結果を非表示 -->
    <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
        
        <p><?=$item?>が選択されました。</p>
    <?php endif; ?>
  <form action="" method="post">
    <p>
      <select name="item">
        <option <?php if($item === 'リンゴ') echo 'selected'; ?>>リンゴ</option>
        <option <?php if($item === 'バナナ') echo 'selected'; ?> >バナナ</option>
        <option <?php if($item === 'ぶどう') echo 'selected'; ?>>ぶどう</option>
        
        <option <?=$item=== 'メロン' ? 'selected' : ' '?>>メロン</option>
        <option <?=$item=== 'みかん' ? 'selected' : ' '?>>みかん</option>
        <option <?=$item=== 'さくらんぼ' ? 'selected' : ' '?>>さくらんぼ</option>
        <option <?=$item=== 'マンゴー' ? 'selected' : ' '?>>マンゴー</option>
        
    </select>
    <input type="submit" value="送信">
    </p>
  </form>
</body>
</html>
