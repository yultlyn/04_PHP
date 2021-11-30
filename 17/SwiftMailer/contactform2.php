<?php
declare(strict_types=1);
require_once dirname(__FILE__) . '/vendor/autoload.php';
require_once dirname(__FILE__) . '/Validation.php';

$query  = '質問';
$name   = '';
$email  = '';
$detail = '';
$result = 1;

$error['name'] = null;
$error['email'] = null;
$error['detail'] = null;

if (!empty($_POST)) {
    $query = $_POST['query'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $detail = $_POST['detail'];

    $v = new Validation();
    $error['name'] = $v->validName($name);
    $error['email'] = $v->validEmail($email);
    $error['detail'] = $v->validDetail($detail);

    if (!isset($error['name']) || !isset($error['email']) || !isset($error['detail'])) {

        try {

            $transport = new Swift_SmtpTransport(
                SMTP_HOST, SMTP_PORT, SMTP_PROTOCOL
            );
            $transport->setUsername(GMAIL_SITE);
            $transport->setPassword(GMAIL_APPPASS);
            $mailer  = new Swift_Mailer($transport);

            $messageArr = [
                'query'  => $query,
                'name'   => $name,
                'email'  => $email,
                'detail' => $detail
            ];

            $messageUser = new Swift_Message(MAIL_TITLE);
            $messageUser->setFrom(MAIL_FROM);
            $messageUser->setTo(sendUserMail($email, $name));
            $messageUser->setBody(setMailBody($messageUser, $messageArr), 'text/html');
            $result = $mailer->send($messageUser);

            $messageAdmin = new Swift_Message(MAIL_TITLE);
            $messageAdmin->setFrom(MAIL_FROM);
            $messageAdmin->setTo(GMAIL_ADMIN);
            $messageAdmin->setBody(setMailBody($messageAdmin, $messageArr), 'text/html');
            $result = $mailer->send($messageAdmin);

            $query  = '質問';
            $name   = '';
            $email  = '';
            $detail = '';
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
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
    <title>お問い合わせフォーム</title>
    <style>
        th,
        td {
            border-bottom: 1px dotted #ccc;
            padding: 10px;
        }

        th {
            vertical-align: top;
            text-align: left;
        }

        td {
            padding-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="submit"],
        textarea {
            width: 400px;
            padding: 10px;
        }

        .error {
            font-weight: bold;
            color: #f00;
            font-size: 12px;
        }

        .error:before {
            content: "※ ";
        }
    </style>
</head>

<body>
    <h1>お問い合わせフォーム</h1>
    <?php if ($result == 2):?>
        <h2>お問い合わせありがとうございました</h2>
        <p><a href="contactform1.php">フォームに戻る</a></p>
    <?php else: ?>
    <p>質問項目を選択し、送信ボタンを押してください。</p>
    <form action="" method="post" novalidate>
        <table>
            <tr>
                <th>質問内容</th>
                <td>
                    <input type="radio" name="query" <?= $query == '質問' ? 'checked' : ''?> value="質問">質問
                    <input type="radio" name="query" <?= $query == '内容' ? 'checked' : ''?> value="内容">内容
                </td>
            </tr>
            <tr>
                <th>お名前</th>
                <td><input type="text" name="name" value="<?= h($name) ?>">
                    <?php if (isset($error['name'])):?>
                        <span class="error"><?=$error['name']?></span>
                    <?php endif;?>
                </td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td><input type="email" name="email" value="<?= h($email) ?>">
                    <?php if (isset($error['email'])):?>
                        <span class="error"><?=$error['email']?></span>
                    <?php endif;?>
                </td>
            </tr>
            <tr>
                <th>お問い合わせ</th>
                <td><textarea name="detail" rows="10"><?= h($detail) ?></textarea>
                    <?php if (isset($error['detail'])):?>
                        <span class="error"><?=$error['detail']?></span>
                    <?php endif;?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="送信"></td>
            </tr>
        </table>
    </form>
    <?php endif;?>
</body>

</html>
