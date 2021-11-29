<?php

$name  = '';
$kana  = '';
$phone = '';
$isValidated = false;//判定結果

if (!empty($_POST)) {
    $isValidated = true;
    $name = $_POST['name'];
    $kana = $_POST['kana'];
    $phone = $_POST['phone'];

    if ($name === '' || mb_ereg_match('/^(\s|　)+$/', $name)) {
        $nameError = '氏名を入力してください';
        $isValidated = false;
    }

    if ($kana === '' || mb_ereg_match('/^(\s|　)+$/', $kana)) {
        $kanaError = 'フリガナを入力してください';
        $isValidated = false;
    } elseif (!preg_match('/^[ァ-ヶー]+$/u', $kana)) {
        $kanaError = 'フリガナの形式が正しくありません';
        $isValidated = false;
    }

    if ($phone === '' || mb_ereg_match('/^(\s|　)+$/', $phone)) {
        $phoneError = '電話番号を入力してください';
        $isValidated = false;
    } elseif (!preg_match('/^0\d{9,10}$/', $phone)) {
        $phoneError = '電話番号の形式が正しくありません';
        $isValidated = false;
    }
}

/**
 * XSS対策の参照名省略
 *
 * @param string string
 * @return string
 *
 */
function h(?string $string): string
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー情報入力</title>
    <style>
        table {
            border: 1px solid #666;
            border-collapse: collapse;
            width: 450px;
        }

        th {
            border: 1px solid #666;
            background-color: #ddd;
            padding: 4px;
            width: 100px;
        }

        td {
            border: 1px solid #666;
            padding: 4px;
        }

        .error {
            font-weight: bold;
            color: #f00;
            font-size: 11px;
        }
    </style>
</head>

<body>
    <h1>ユーザー情報入力</h1>
    <?php if ($isValidated == true):?>
        <table>
            <tr>
                <th>氏名</th>
                <td><?=h($name)?></td>
            </tr>
            <tr>
                <th>フリガナ</th>
                <td><?=h($kana)?></td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td><?=h($phone)?></td>
            </tr>
        </table>
        <p>入力ありがとうございました。</p>
        <p><a href="userform.php">戻る</a></p>
    <?php else:?>
    <p>下のフォームに記入して送信ボタンを押してください</p>
    <form action="" method="post" novalidate>
        <table>
            <tr>
                <th>氏名</th>
                <td>
                    <input type="text" name="name" size="15" value="<?= h($name) ?>">
                    <?php if (isset($nameError)):?>
                        <span class="error"><?=$nameError?></span>
                    <?php endif;?>
                </td>
            </tr>
            <tr>
                <th>フリガナ</th>
                <td>
                    <input type="text" name="kana" size="15" value="<?= h($kana) ?>">
                    <?php if (isset($kanaError)):?>
                        <span class="error"><?=$kanaError?></span>
                    <?php endif;?>
                </td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>
                    <input type="text" name="phone" size="15" value="<?= h($phone) ?>">
                    <?php if (isset($phoneError)):?>
                        <span class="error"><?=$phoneError?></span>
                    <?php endif;?>
                </td>
            </tr>
        </table>
        <p><input type="submit" value="送信"></p>
    </form>
    <?php endif;?>
</body>

</html>
