<div class="titulo">Conversões</div>

<?php
echo is_int(PHP_INT_MAX);

//int para float
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);

//float para int
echo '<p>Float para int</p>';
var_dump((int) 6.8);
echo '<br>';
var_dump(intval(2.999));
echo '<br>';
var_dump((int) round(2.8));

// operações com string
echo '<p>Strings</p>';
var_dump(3 + "2"); //int(5)
echo '<br>';
var_dump("3" + 2); //int(5)
echo '<br>';
var_dump(1 + "5 cinco"); // = int(6)
echo '<br>';
var_dump(1 + "2+5"); // = int(3)
echo '<br>';
var_dump(1 + "3.2"); // = float(4.2)
echo '<br>';
var_dump(1 + "-3.2e2"); // = float(-319)
echo '<br>';
var_dump((float) "10.5"); // = float(10.5)
echo '<br>';
var_dump((int) "10.5"); // = int(10.5)
echo '<br>';
var_dump((int) round("10.5")); // = int(11)
echo '<br>';
var_dump("3" . 2); //string(2) "32"
echo '<br>';
var_dump(is_string("3" + 2)); //bool(false)
echo '<br>';
var_dump(is_string("3" . 2)); //bool(true)
echo '<br>';
//var_dump(1 + "cinco"); // = 1
//echo '<br>';
//var_dump(1 + "cinco 5"); // = int(1)