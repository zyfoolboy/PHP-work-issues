<?php
$arr1 = [
    'Te' => ['1', '2'],
    'Tw' => ['2', '3'],
    'Tr' => ['3', '4'],
    'Tt' => '4',
    'Ty' => '5',
];
$arr2 = array_change_key_case($arr1, CASE_UPPER);
$arr3 = array_change_key_case($arr1, CASE_LOWER);
var_dump($arr2, $arr3);
$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array, 2));
print_r(array_chunk($input_array, 2, true));
print_r(array_combine($arr1, $input_array));
?>
