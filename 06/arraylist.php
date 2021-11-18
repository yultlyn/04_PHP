<?php
// 果物の配列を作成
$fruits = ['リンゴ', 'バナナ', 'ぶどう'];

$fruits[2] = 'イチゴ';
$fruits[3] = 'メロン';

unset($fruits[1]);

echo '<pre>';
var_dump($fruits);
echo '</pre>';

echo '<pre>';//pr
print_r($fruits);
echo '</pre>';

//練習問題06-3
$arrayList = [
    'リンゴ' => 100,
    'バナナ' => 200,
    'ぶどう' => 300,
    ];

    $arrayList['イチゴ'] = 400;
    $arrayList['リンゴ'] = 80;


    echo '<pre>';
    print_r($arrayList);
    echo '</pre>';
