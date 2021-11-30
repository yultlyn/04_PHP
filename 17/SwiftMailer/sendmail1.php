<?php

require_once dirname(__FILE__) . '/vendor/autoload.php';
// クラスエラーを取得
try {
  // 送信元(GmailのSMTPサーバ)の設定
  $transport = new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls');
  // 差出人の認証に使用する資格情報(SMTP Credentials)を指定
  $transport->setUsername('yutyn.tk24@gmail.com');
  // Googleのアプリパスワードを添付
  $transport->setPassword('pesbwkqfzdhaavcm');
  // インスタンスの生成
  $mailer = new Swift_Mailer($transport);

  // メールメッセージの作成
  $message = new Swift_Message('タイトル');
  $message->setBody('aaaaです');
  // メールの差出人
  $message->setFrom(['yutyn.tk24@gmail.com']);
  // メールの送信先
  $message->setTo(['yutyn.tk24@gmail.com']);

  // メール送信(成功時1失敗時0が返る)
  $result = $mailer->send($message);
  var_dump($result);
} catch (Exception $e) {
  // クラスエラーを出力し処理を中断
  echo $e->getMessage();
  exit;
}
