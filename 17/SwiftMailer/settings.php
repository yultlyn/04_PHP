<?php
const SMTP_HOST     = 'smtp.gmail.com';
const SMTP_PORT     = 587;
const SMTP_PROTOCOL = 'tls';
const GMAIL_SITE    = 'yutyn.tk24@gmail.com';
const GMAIL_APPPASS = 'pesbwkqfzdhaavcm';
// 代替テキスト(送信元のGmailでOK)
const MAIL_FROM     = ['info@web.com' => '公式サイト'];
// 複数の送信先の設定
const MAIL_TO       = [
  'yutyn.tk24@gmail.com'  => 'Web担当者様',
  'y.aratake@ebacorp.jp' => '営業担当者様'
];
const MAIL_TITLE    = 'タイトル';
