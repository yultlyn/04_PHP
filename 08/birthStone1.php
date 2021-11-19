<?php
$birthStone = [
   

$month = $_POST['month'];
$birthStone[$month];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>誕生石</title>
</head>
<body>
    <h1>誕生石</h1>
    <form action="" method="post" novalidate>
        <p><?=$birthStone['id']?>月の誕生石は<?=$birthStone['name']?>です！</p>

        <p>誕生石を選んでください:
            <select name="month" >
                <option value="1">1月</option>
                <option value="2">2月</option>
                <option value="">3月</option>
                <option value="">4月</option>
                <option value="">5月</option>
                <option value="">6月</option>
                <option value="">7月</option>
                <option value="">8月</option>
                <option value="">9月</option>
                <option value="">10月</option>
                <option value="">11月</option>
                <option value="">12月</option>
                
            </select>
            <input type="submit" value="送信">

        </p>
        
    </form>
</body>
</html>
