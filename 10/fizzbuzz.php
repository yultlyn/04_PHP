<?php
 for($i = 1; $i <= 100; $i++){
     if($i % 5 == 0 && $i % 3 == 0){
         echo $i .'FizzBuzz' . '<br>';
     }else if($i % 5 == 0){
         echo $i .':Buzz'. '<br>';
     }else if($i % 3 == 0){
         echo $i . ':Fizz'. '<br>';
     }else
     echo $i . '<br>';
 }
?>
