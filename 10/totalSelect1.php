<?php
$arr = '';
$num = '';

if (!empty($_POST)) {
    $num = $_POST['num'];
}

$numArr = [30, 65, 72, 47, 63, 96];

    $total = 0;
    for ($i = 0; $i < count($numArr); $i++) {
        $total += $numArr[$i];
    }


$result = $total * $num;


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>合計値の計算</title>
</head>
<body>
    <h1>合計値の計算</h1>
    <form action="" method="post" novalidate>
        <p>配列の選択：
            <select name="arr" id="">
                <option <?php if ($arr === '配列1') echo 'selected';?>>配列1</option>
                <option <?php if ($arr === '配列2') echo 'selected';?>>配列2</option>
                <option <?php if ($arr === '配列3') echo 'selected';?>>配列3</option>
                <option <?php if ($arr === '配列4') echo 'selected';?>>配列4</option>
            </select>
        </p>
    
        <p>
            掛ける数値：
            <input type="text" name="num" size="2" maxlength="2" value="<?=$num?>">
        </p>
        <input type="submit" value="計算">
    </form>

    <p>合計結果：<?=$result?></p>
</body>
</html>
