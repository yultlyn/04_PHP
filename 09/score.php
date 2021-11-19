<?php
$score ='';
$reslut = '';
if (!empty($_POST)) {
    $score = $_POST['score'];
}

    if (!is_numeric($score)){
        $reslut  = '数値を入力してください';
    }else if ($score > 100 || $score < 0) {
        $reslut  = '不正な点数です';
    }else if ($score == 100) {
        $reslut  = '満点おめでとう';
    } else if ($score >= 80) {
        $reslut  =  '素晴らしいです';
    }else if ($score >= 80) {
        $reslut  = '合格です';
    }else{
        $reslut = '不合格です';
    }


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>テスト結果判定</title>
</head>
<body>
    <h1>テスト結果判定</h1>
    <form action="score.php" method="post" novalidate>
    <p>点数：
      <input type="text" name="score" size="3" maxlength="3" <?=htmlspecialchars($score, ENT_QUOTES, 'UTF-8');?>>点
      <input type="submit" value="判定">
    </p>
    <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
        <p>判定：<?=htmlspecialchars($reslut, ENT_QUOTES, 'UTF-8');?></p>
    <?php endif; ?>
    
    </form>
</body>
</html>
