<?php
$produce = array(
    array('1', '2', '3'),
    array('4', '5', '6'),
    array('7', '8', '9')
);

//循环多维数组,数字索引数组
//1.手动一个一个打出来
for ($row = 0; $row < 3; $row++) {
    for ($col = 0; $col < 3; $col++) {
        echo '|' . $produce[$row][$col];
    }
    echo "</br>";
}
echo '</br>';
//循环多维数组，关联数组
//1.手动一个一个打出来
$produce2 = array(array('a' => '1', 'b' => '2', 'c' => '3'), array('a' => '4', 'b' => '5', 'c' => '6'), array('a' => '7', 'b' => '8', 'c' => '9'));

for ($row = 0; $row < 3; $row++) {
    echo '|' . $produce2[$row]['a'] . '|' . $produce2[$row]['b'] . '|' . $produce2[$row]['c'] . '|';
}
echo '</br>';
for ($row = 0; $row < 3; $row++) {
    while (list($key, $value) = each($produce2[$row])) {
        echo '|' . $value;
    }
}
?>