<?php
$prices = [298, 129, 198, 274, 625, 273, 296, 325, 200, 127, 398];
// 表示結果： 3,457円

/**
 * 購入価格の配列を引数として受け取ると、
 * 10％の税込み価格を返す
 *
 * @param integer $pricesArr
 * @return int
 */

function getPriceInTax (array $pricesArr) : ?string
{
    $total = 0;
    foreach ($pricesArr as $price) {
        $total += $price;
    }
    return $total * 1.1;
}

echo number_format(getPriceInTax($prices)) . '円';
