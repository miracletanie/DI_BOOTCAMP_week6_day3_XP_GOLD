<?php

function addition($list1, $list2) {
    $result = array();
    for ($i = 0; $i < count($list1); $i++) {
        $result = $list1[$i] * $list2[$i];
    }
    return $result;
}

$list1 = array(1, 2, 3, 4, 5);
$list2 = array(6, 7, 8, 9, 10);

$result = addition($list1, $list2);
print_r($result);



?>
