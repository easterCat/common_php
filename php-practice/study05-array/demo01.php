<?php
//range()生成一个升序的数字数组
$array = range(1, 99);
print_r($array);
echo '</br>';
//range()第三个参数设置步幅
$array2 = range(1, 99, 10);
print_r($array2);
echo '</br>';
//循环数组
foreach ($array2 as $ele) {
	echo $ele . ' ';
}
echo '</br>';
//关联数组
$prices = array('lilisi' => 100, 'maria' => 200, 'alisy' => 300);
//循环关联数组,使用foreach循环
foreach ($prices as $key => $value) {
	echo $key . '===' . $value;
}
echo '</br>';
//循环关联数组,使用each()结构
//当使用each的时候，数组会记录当前元素，重新使用该数组需要使用reset()函数
reset($prices);
while ($element = each($prices)) {
	echo $element['key'] . '===' . $element['value'];
}
echo '</br>';
//循环关联数组,使用list()结构
reset($prices);
while (list($product, $price) = each($prices)) {
	echo $product . '===' . $price;
}
?>