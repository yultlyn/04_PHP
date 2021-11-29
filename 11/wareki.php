<?php
declare(strict_types=1);
require_once dirname(__FILE__) . '/util.inc.php';

$seireki = '';
if (!empty($_POST)) {
    $seireki = $_POST['seireki'];
    $result = getWareki($seireki);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>西暦⇒和暦変換</title>
</head>

<body>
    <h1>西暦⇒和暦変換</h1>
    <p>西暦を入力し、「送信」ボタンを押してください。</p>
    <form action="" method="post" novalidate>
        西暦：<input type="text" name="seireki" size="4" maxlength="4" value="<?= h($seireki) ?>">年
        <p><input type="submit" value="計算"></p>
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] === "POST") : ?>
        西暦<?= h($seireki) ?>年は、<?= h($result) ?>です。
    <?php endif; ?>
</body>

</html>
