<?php

$d1 = new DateTime();
$d2 = new DateTime();

$d1->modify('-10 days'); 
$d2->modify('last day of February 2025'); 




$interval = $d1->diff($d2);
$days = $interval->days;
$invert = $interval->invert;


function getToday (object $dayObj) : string
{
    $w = ['日', '月', '火', '水', '木', '金', '土'];
   return $dayObj->format('Y年m月d日' ) . '(' .  $w[$dayObj->format('w')] . ')';
}

if ($days == 0) {
  echo '日付は同じです';
} else {
  if ($invert == 1) {
    echo getToday($d1) . '曜日の方が「'. $days. '日分」' . getToday($d1) . '曜日より新しいです';
  } else {
    echo getToday($d1) . '曜日の方が「'. $days. '日分」' . getToday($d1) . '曜日より新しいです';
  }
}



/*
if ($days === 0) {
    echo '日付が同じです';
} elseif ($invert === 1) {
    echo $d1->format('Y年m月d日') . '(' . $w[$d1->format('w')] . ')の方が「' . $days . '日分」' . $d2->format('Y年m月d日') . '(' . $w[$d2->format('w')] . ')より新しいです';
} else {
    echo $d2->format('Y年m月d日') . '(' . $w[$d2->format('w')] . ')の方が「' . $days . '日分」' . $d1->format('Y年m月d日') . '(' . $w[$d1->format('w')] . ')より新しいです';
}*/
