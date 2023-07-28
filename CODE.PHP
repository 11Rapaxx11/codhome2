<?php

function isAnagram($str1, $str2) {

    $str1 = strtolower(str_replace(' ', '', $str1));
    $str2 = strtolower(str_replace(' ', '', $str2));

    if (strlen($str1) != strlen($str2)) {
        return false;
    }

    $str1_array = str_split($str1);
    $str2_array = str_split($str2);

    sort($str1_array);
    sort($str2_array);

    if ($str1_array == $str2_array) {
        return true;
    } else {
        return false;
    }
}

$str1 = "listen";
$str2 = "silent";


if (isAnagram($str1, $str2)) {
    echo "Вторая строка является анаграммой первой";
} else {
    echo "Вторая строка не является анаграммой первой";
}

?>