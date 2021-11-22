<?php
$x = '<br>';

 for ($i = 1; $i <= 100; $i++) {
     if ($i % 5 == 0 && $i % 3 == 0) {
         echo $i .':FizzBuzz' . $x;
     } elseif ($i % 5 == 0){
         echo $i .':Buzz'. $x;
     } elseif ($i % 3 == 0){
         echo $i . ':Fizz'. $x;
     } else
     echo $i . $x;
 }
