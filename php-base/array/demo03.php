<?php
$array = array(4, 35, 654, 2, 35, 6);

foreach ($array as $index => $value) {
    echo $index;
    echo $value;
    echo "</br>";
}

$array = sort($array);

print_r($array);

//if (get_magic_quotes_gpc()) {
//	echo 'true';
//}else{
//	echo 'false';
//}
?>