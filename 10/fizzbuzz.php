<?php

for ($i = 1; $i <= 100; $i++) {
    if ($i % 5 == 0 && $i % 3 == 0) {
        echo $i . ':FizzBuzz' ;
    }
    elseif ($i % 5 == 0) {
        echo $i . ':Buzz';
    }
    elseif ($i % 3 == 0) {
        echo $i . ':Fizz';
    }
    else {
    echo $i;
    }
    echo '<br>';
}
