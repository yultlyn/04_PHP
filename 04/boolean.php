<?php
var_dump((bool) -2);/*true */
var_dump((bool) 0);/*false */
var_dump((bool) null);/*false */
var_dump((bool) 'foo');/*true */
var_dump((bool) false);/*false */
var_dump((bool) 'false');/*true */
var_dump((bool) ' ');/*true */
var_dump((bool) 0.0);/*false */
var_dump((bool) [1]);/*true */
/*var_dump((bool) underfind);*/
var_dump((bool) []);/*false */
var_dump((bool) '0');/*false */
?>
