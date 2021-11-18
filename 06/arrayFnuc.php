<?php
$text = 'PHP　MySQL　Laravel';


$alph = 'A - B - C';

$arr = explode('-', $alph);
$num = array_push($arr,  'D');
array_push($arr, $num . '個');

echo  implode(' | ', $arr);


?>
<br>


<?='http://example.com?'
. http_build_query(explode('　', $text))?>
